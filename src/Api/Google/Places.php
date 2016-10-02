<?php

namespace guru\Api\Google;

use App\Models\Location;
use guru\Helpers\Config;
use Illuminate\Support\Facades\Lang;

class Places
{
    /**
     * @var string
     */
    private $url;

    /**
     * @const string
     */
    const CITIES = '(cities)';

    /**
     * @const string
     */
    const OK = 'OK';

    /**
     * @var float
     */
    private $lat;

    /**
     * @var float
     */
    private $long;

    /**
     * @var string
     */
    private $type;

    /**
     * Places constructor.
     *
     * @param int $radius
     * @param float $long
     * @param float $lat
     * @param string $type
     */
    public function __construct($radius = 100, $long = 8.6753, $lat = 9.0820, $type = self::CITIES)
    {
        $this->url = 'https://maps.googleapis.com/maps/api/place/autocomplete/json';
        $this->radius = 100;
        $this->lat = $lat;
        $this->long = $long;
        $this->radius = $radius;
        $this->type = $type;
    }

    /**
     * @param $text string
     *
     * @param Location $location
     *
     * @return \JSON
     */
    public function getPlace($text, Location $location)
    {
        $queries = http_build_query(
            [
                'input' => $text,
                'location' => $this->long . ',' . $this->lat,
                'types' => $this->type,
                'key' => $_SERVER['GOOGLE_API_KEY'],
                'components' => 'country:' . (new Config())->getCC(),
            ]
        );

        $jsonUrl = $this->url . '?' . $queries;
        $json = file_get_contents($jsonUrl);

        return $this->processPlaces($json, $location);
    }

    /**
     * @param $json
     * @param Location $location
     *
     * @return array
     */
    private function processPlaces($json, Location $location)
    {
        $places = json_decode($json);

        if ($places->status !== self::OK) {
            return $this->sendResponse();
        }

        $place_ids = [];
        foreach ($places->predictions as $place) {
            $place_ids[$place->place_id] = ['name' => $place->description];
        }
        $dbPlaces = $location->whereIn('place_id', array_keys($place_ids))->get();

        $validData = [];
        foreach ($dbPlaces as $dbPlace) {
            if (isset($place_ids[$dbPlace->place_id])) {
                $validData[] = ['id' => $dbPlace->id, 'name' => $place_ids[$dbPlace->place_id]['name']];
            }
        }

        return $this->sendResponse($validData);
    }

    /**
     * @param null $data
     *
     * @return array
     */
    private function sendResponse($data = null)
    {
        if (empty($data)) {
            return $this->sendNotFound();
        }

        return $this->sendFound($data);
    }

    /**
     * @return array
     */
    private function sendNotFound()
    {
        return ['status' => 0, 'message' => 'City is not supported'];
    }

    /**
     * @param array $data
     *
     * @return array
     */
    private function sendFound(array $data)
    {
        return ['status' => 1, 'data' => $data];
    }

}

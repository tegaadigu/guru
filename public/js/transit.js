/**
 * Created by Tega on 30/09/2016.
 */

var Transit = function (element) {
    this.init(element);
};

Transit.prototype = {
    init: function (ele) {
        this.ele = ele;
        this.url = ele.data('url');
        var self = this;
        this.request = false;
        this.ele.on('input keyup', function () {
            var that = this;
            setTimeout(function () {
                self.autocomplete($(that).val())
            }, 2000)
        });
    },
    autocomplete: function (data) {
        var self = this;
        if (data.length > 2) {
            self.sendRequest(data, self.url);
        }

        return false;
    },
    sendRequest: function (text, url) {
        var self = this;
        if (self.request === true) {
            return false;
        }
        self.request = true;
        $.ajax({
            url: url,
            data: {text: text}
        }).done(function (res) {
            self.request = false;
            self.displayResponse(res);
        })
    },
    displayResponse: function (res) {
        var ul = $('ul');
        ul.attr('class', 'list-unstyled list-inline');

        if(!res.status){
            var li = this.createListElement();
            li.attr('class')
        }
    }
}

$(document).ready(function (e) {
    transit = new Transit($('input[data-transit=true]'));
});


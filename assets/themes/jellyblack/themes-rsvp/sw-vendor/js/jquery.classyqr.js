(function ($) {
    $.fn.extend({
        ClassyQR: function (options) {

            var defaults = {
                size: 230,
                type: 'text',
                text: 'Welcome to ClassPM',
                name: null,
                number: null,
                email: null,
                subject: null,
                latitude: null,
                longitude: null,
                address: null,
                url: null,
                note: null,
                ssid: null,
                password: null,
                auth: null
            };

            var settings = $.extend(defaults, options);

            return this.each(function () {
                var el = $(this);
                el.html(""); // reset isi

                let qrText = "";

                switch (settings.type) {

                    case 'contact':
                        qrText = `MECARD:N:${settings.name};TEL:${settings.number};URL:${settings.url};EMAIL:${settings.email};ADR:${settings.address};NOTE:${settings.note};`;
                        break;

                    case 'wifi':
                        qrText = `WIFI:S:${settings.ssid};T:${settings.auth};P:${settings.password};`;
                        break;

                    case 'location':
                        qrText = `geo:${settings.latitude},${settings.longitude}`;
                        break;

                    case 'call':
                        qrText = `tel:${settings.number}`;
                        break;

                    case 'email':
                        qrText = `mailto:${settings.email}?subject=${settings.subject}&body=${settings.text}`;
                        break;

                    case 'sms':
                        qrText = `smsto:${settings.number}:${settings.text}`;
                        break;

                    case 'url':
                        qrText = settings.url;
                        break;

                    case 'text':
                    default:
                        qrText = settings.text;
                        break;
                }

                // Generate QR pakai QRCode.js
                new QRCode(el[0], {
                    text: qrText,
                    width: settings.size,
                    height: settings.size,
                    correctLevel: QRCode.CorrectLevel.H
                });

            });
        }
    });
})(jQuery);
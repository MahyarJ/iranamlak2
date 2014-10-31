# $.fn.numbermask = function () {
#     $(this).keyup(function () {
#         addcamma(this);
#     });
#     $(this).blur(function () {
#         addcamma(this);
#     });

#     function addcamma(e) {
#         var num = "0123456789";
#         var txt = $(e).val();
#         for (i = 0; i < txt.length; i++)
#             if (num.indexOf(txt.substr(i,1)) == -1)
#                 txt = txt.substr(0, i) + txt.substr(i+1);


#         txt = (isNaN(parseFloat(txt)) ? "" : parseFloat(txt).toString());

#         var rx = /(\d+)(\d{3})/;
#         txt = txt.replace(/^\d+/, function (w) {
#             while (rx.test(w)) {
#                 w = w.replace(rx, '$1,$2');
#             }
#             return w;
#         });
#         $(e).val(txt);
#     }

# };

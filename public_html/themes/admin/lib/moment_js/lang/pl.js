(function() {
    var a = function(a) {
        return a % 10 < 5 && a % 10 > 1 && ~~(a / 10) !== 1
    }, b = function(b, c, d) {
        var e = b + " ";
        switch (d) {
            case"m":
                return c ? "minuta" : "minutę";
            case"mm":
                return e + (a(b) ? "minuty" : "minut");
            case"h":
                return c ? "godzina" : "godzinę";
            case"hh":
                return e + (a(b) ? "godziny" : "godzin");
            case"MM":
                return e + (a(b) ? "miesiące" : "miesięcy");
            case"yy":
                return e + (a(b) ? "lata" : "lat")
        }
    }, c = {months: "styczeń_luty_marzec_kwiecień_maj_czerwiec_lipiec_sierpień_wrzesień_październik_listopad_grudzień".split("_"), monthsShort: "sty_lut_mar_kwi_maj_cze_lip_sie_wrz_paź_lis_gru".split("_"), weekdays: "niedziela_poniedziałek_wtorek_środa_czwartek_piątek_sobota".split("_"), weekdaysShort: "nie_pon_wt_śr_czw_pt_sb".split("_"), longDateFormat: {LT: "HH:mm", L: "DD-MM-YYYY", LL: "D MMMM YYYY", LLL: "D MMMM YYYY LT", LLLL: "dddd, D MMMM YYYY LT"}, meridiem: {AM: "AM", am: "am", PM: "PM", pm: "pm"}, calendar: {sameDay: "[Dziś o] LT", nextDay: "[Jutro o] LT", nextWeek: "[W] dddd [o] LT", lastDay: "[Wczoraj o] LT", lastWeek: "[W zeszły/łą] dddd [o] LT", sameElse: "L"}, relativeTime: {future: "za %s", past: "%s temu", s: "kilka sekund", m: b, mm: b, h: b, hh: b, d: "1 dzień", dd: "%d dni", M: "miesiąc", MM: b, y: "rok", yy: b}, ordinal: function(a) {
            return"."
        }};
    typeof module != "undefined" && (module.exports = c), typeof window != "undefined" && this.moment && this.moment.lang && this.moment.lang("pl", c)
})();
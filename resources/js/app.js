import './bootstrap';
import './plugins/codebase/grid.min.js';

const dataset = [
    {
        "country": "China",
        "population": "1415045928",
        "yearlyChange": "0.0039",
        "netChange": "5528531",
        "density": "151",
        "area": "9388211",
        "migrants": "-339690",
        "fert": "1.6",
        "age": "37",
        "urban": "0.5800",
        "id": "1"
    },
    {
        "country": "India",
        "population": "1354051854",
        "yearlyChange": "0.0111",
        "netChange": "14871727",
        "density": "455",
        "area": "2973190",
        "migrants": "-515643",
        "fert": "2.4",
        "age": "27",
        "urban": "0.3200",
        "id": "2",
        "custom": true
    },
    {
        "country": "U.S.",
        "population": "326766748",
        "yearlyChange": "0.0071",
        "netChange": "2307285",
        "density": "36",
        "area": "9147420",
        "migrants": "900000",
        "fert": "1.9",
        "age": "38",
        "urban": "0.8300",
        "id": "3"
    },
    {
        "country": "Indonesia",
        "population": "266794980",
        "yearlyChange": "0.0106",
        "netChange": "2803601",
        "density": "147",
        "area": "1811570",
        "migrants": "-167000",
        "fert": "2.5",
        "age": "28",
        "urban": "0.5400",
        "id": "4"
    }
];

const grid = new dhx.Grid("grid", {
    columns: [
        { width: 200, id: "country", header: [{ text: "Country" }] },
        { width: 150, id: "population", header: [{ text: "Population" }] },
        { width: 150, id: "yearlyChange", header: [{ text: "Yearly Change" }] },
        {
            width: 150, id: "netChange", header: [{ text: "Net Change" }],
            htmlEnable: true,
            template: function (text, row, col) {
                return "<input class=\"custom_div\" type=\"checkbox\" disabled " + (text > 300000 ? "checked" : "") + " ></div>";
            }
        },
        { width: 150, id: "density", header: [{ text: "Density (P/Km²)" }] },
        { width: 150, id: "area", header: [{ text: "Land Area (Km²)" }] },
        { width: 150, id: "migrants", header: [{ text: "Migrants (net)" }] },
        { width: 150, id: "fert", header: [{ text: "Fert. Rate" }] },
        { width: 150, id: "age", header: [{ text: "Med. Age" }] },
        { width: 150, id: "urban", header: [{ text: "Urban Pop" }] }
    ],
    data: dataset
});

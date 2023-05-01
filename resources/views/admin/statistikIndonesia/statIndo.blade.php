<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <title>Statistika Sampah Tekstil di Indonesia</title>
    <style>
        svg {
            width: 100%;
            height: auto;

        }

        .legend {
            font-size: 12px;
        }

        .legend rect {
            width: 30px;
            height: 10px;
            margin-right: 5px;
            opacity: 0.8;
        }

        .h1ini {
            font-family: Playfair Display, Georgia, Times New Roman, "Liberation Serif", serif;
            font-weight: 400;
            color: #555;
            margin: 0;
            font-size: 22.4px;
            line-height: 1;
            overflow-y: visible;
            margin-bottom: 4px;
            text-align: center;
        }

        p {
            color: #666;
            margin: 0;
            text-align: center;
        }
    </style>
    <link href="/dist/output.css" rel="stylesheet">

</head>

<body>
    <h1 class="h1ini" style="font-size: 22.4px; line-height: 1; overflow-y: visible; margin-bottom: 4px;">
        <span><span>Angka Penyebaran
                Limbah Tektil di Indonesia 2022</span><br></span>
    </h1>
    <p style="font-size: 12.8px; line-height: 1.2; overflow-y: hidden;"><span class="markdown-text-wrap"
            style="font-size: 12.8px; line-height: 1.2;"><span class="markdown-text-wrap__line"><span>Penyebaaran Limbah
                    Tekstil di Indonesia.</span></span></span></p>
    <svg id="map"></svg>
    <div id="legend-container"></div>
    {{-- <script src="https://d3js.org/d3.v7.min.js"></script> --}}
    <script src="{{ asset('dataStat/js/d3.v7.min.js') }}"></script>
    <script>
        const width = 960;
        const height = 600;

        const svg = d3.select("#map").attr("width", width).attr("height", height);

        const projection = d3
            .geoMercator()
            .center([120, -4])
            .scale(1000)
            .translate([width / 2, height / 2]);

        const path = d3.geoPath(projection);

        const colorScale = d3.interpolateRgb("  #67e218  ", "  #eb3112  ");

        const legendColors = d3.scaleSequential(colorScale).domain([20, 35]);

        const legend = d3
            .select("#legend-container")
            .append("svg")
            .attr("width", 200)
            .attr("height", 50)
            .attr("class", "legend");

        const legendRects = legend
            .selectAll("rect")
            .data(d3.range(20, 36))
            .join("rect")
            .attr("x", (d, i) => i * 30)
            .attr("y", 0)
            .attr("width", 30)
            .attr("height", 10)
            .attr("fill", (d) => legendColors(d));

        const legendTexts = legend
            .selectAll("text")
            .data(d3.range(20, 36))
            .join("text")
            .attr("x", (d, i) => i * 30 + 15)
            .attr("y", 25)
            .text((d) => d);

        d3.csv("{{ asset('dataStat/rating.csv') }}").then((data) => {
            const rateById = {};
            console.log(data);
            data.forEach((d) => {
                rateById[d.id] = {
                    province: d.province,
                    rating: parseFloat(d.rating),
                };
            });

            d3.json("{{ asset('dataStat/gadm41_IDN_1.json') }}").then((mapData) => {
                svg
                    .selectAll("path")
                    .data(mapData.features)
                    .join("path")
                    .attr("fill", (d) => {
                        const id = d.properties.id
                            .toString(); // mengambil nilai properti "id" dari objek fitur
                        const parsedId = parseInt(id); // mengubah nilai "id" menjadi number
                        const rating = rateById[parsedId] ? rateById[parsedId].rating : 0;
                        console.log(rating);
                        return colorScale((rating - 20) / 15);
                    })
                    .attr("d", path)
                    .append("title")
                    .text((d) => {
                        const id = d.properties.id;
                        const parsedId = parseInt(id);
                        const province = rateById[parsedId] ?
                            rateById[parsedId].province :
                            "Unknown";
                        const rating = rateById[parsedId] ?
                            rateById[parsedId].rating :
                            "0";
                        return `${province}: ${rating}%`;
                    });
            });
        });
    </script>
</body>

</html>

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="style.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <script>
        $(document).ready(function(){

            $(".table").hide();

            $("button").click(function(){
                $(".table").fadeToggle(2000, function() { 
                    if ($(".table").is(":visible")) {
                        let totalAge = 0;
                        let count = 0;

                        $(".table tr").each(function(index){
                            if (index > 0) { 
                                let age = parseInt($(this).find("td:nth-child(2)").text());
                                totalAge += age;
                                count++;
                            }
                        });

                        let averageAge = (totalAge / count).toFixed(2);
                        $("#averageAge").text("Rata-rata umur: " + averageAge);
                    } else {
                        $("#averageAge").text("");
                    }
                });
            });
        });
        </script>
    </head>
    <body class="body">
        <h2>Data  Siswa</h2>
        <button>Click to show database</button>

        <table class="table">
            <tr>
                <th>Nama</th>
                <th>Umur</th>
                <th>Kelas</th>
                <th>Alamat</th>
            </tr>

            <tr>
                <td>Andi</td>
                <td>15</td>
                <td>10A</td>
                <td>Malang</td>
            </tr>

            <tr>
                <td>Siti</td>
                <td>16</td>
                <td>10B</td>
                <td>Batu</td>
            </tr>

            <tr>
                <td>Budi</td>
                <td>15</td>
                <td>10A</td>
                <td>Dinoyo</td>
            </tr>

            <tr>
                <td>Anton</td>
                <td>25</td>
                <td>15A</td>
                <td>Dinoyo</td>
            </tr>
        </table>

        <p id="averageAge"></p>

    </body>
</html>

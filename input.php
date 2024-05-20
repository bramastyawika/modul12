<!DOCTYPE html>
<html>
    <head>
        <style>
            h1{
                text-align: center;
            }
            .container{
                width: 400px;
                margin: outo;
            }
        </style>
    </head>
    <body>
        <h1>input data</h1>
        <div class="container">
            <form id="form_dosen" action="proses_inputdosen.php" method="post">
                <fieldset>
                <legend>input data dosen</legend>
                    <p>
                        <label for="nama">nama dosen : </label>
                        <input type="text" name="namaDosen" id="namaDosen">
                    </P>
                    <p>
                        <label for="ipl">No HP :</label>
                        <input type="text" name="noHP" id="noHP" placeholder="contoh: 081234567">
                    </p>
                </fieldset>
                <p>
                    <input type="submit" name="input" value="simpan">
                </p>
            </form>
        </div>
    </body>
</html>

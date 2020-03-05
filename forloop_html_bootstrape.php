<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <title>Multiplication table</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col col-lg-12">
                <h3>Multiplication Table Using For Loop</h3>
                <hr/>
            </div>

            <div class="col-lg-6">
                <label for="">Multiplication Table Of.</label>
                <input type="number" class="form-control" min="1" id="table_no">
            </div>
            <div class="col-lg-6">
                <label for="">Upto?.</label>
                <input type="number" class="form-control" min="1" id="upto">
            </div>
            <div class="col-lg-12 mt-3">
                <button type="button" class="btn btn-primary" id="display">Display</button>
            </div>
            <div class="col-lg-12 mt-5">
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th>Table No.</th>
                            <th>*</th>
                            <th>Upto value.</th>
                            <th>=</th>
                            <th>Multi Value</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <?php for ($i=1; $i <= $upto_val ; $i++) : ?>
                                <tr>
                                    <td><?= $tbl_no ?></td>
                                    <td>*</td>
                                    <td><?= $i ?></td>
                                    <td>=</td>
                                    <td><?php $ans=$tbl_no * $i ;
                                        echo "$ans"; ?>
                                    </td> 
                                </tr>
                            <?php endfor;?>
                        </tr>
                     </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
    $document.ready(function() {
        $('#display').click(function(){
        //   $('tbody').fadeIn();
          $tbl_no=$('table_no');
          $upto_val=$('upto');
          $ans=0;
        });
    });
</script>

</html>
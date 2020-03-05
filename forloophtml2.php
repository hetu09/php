<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
    <title>card</title>
</head>

<body>
    <div class="jumbotron">
        <!-- multi-card using forloop -->
        <div class="row">
            <?php for ($i=1; $i < 5 ; $i++) :?>
            <div class="col-lg-3">
                <div class="card">
                    <div class="card-header">
                        <?php
                            echo "card No. $i";
                         ?>
                    </div>
                    <div class="card-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas, repellendus itaque
                            dolorem rem, enim, eveniet qui dolore eos repellat soluta non iure mollitia. Deleniti,
                            laborum? Fugiat laboriosam quam amet accusamus?</p>
                    </div>
                </div>
            </div>
            <?php endfor; ?>

        </div>
    </div>
</body>

</html>
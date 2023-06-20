<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>

<body>
    <form>
        <div class="container">
            <div class="row mx-5">
                <div class="bg-light rounded h-100 p-4 mx-6">
                    <u>
                        <h3 class="mb-4">Bajar</h3>
                    </u>
                    <form action="" method="post">

                        <div class="row">
                            <div class="col-4 row mb-2">
                                <label class="col-3 col-form-label">1 Kg</label>
                                <div class="col-sm-9 mb-2">
                                    <input type="text" id="Bajar" autocomplete="off" onkeyup="bajar();" class="form-control mb-2" autofocus>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4 row mb-2">
                                <label class="col-3 col-form-label">0.05</label>
                                <div class="col-sm-9 mb-2">
                                    <input type="text" id="Bad" autocomplete="off" class="form-control mb-2" disabled>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4 row mb-2">
                                <label class="col-3 col-form-label">B.R</label>
                                <div class="col-sm-9 mb-2">
                                    <input type="text" id="Br" autocomplete="off" class="form-control mb-2" disabled>
                                </div>
                            </div>
                        </div>
                        <u>
                            <h3 class="mb-4 mt-4">Calculate Rate</h3>
                        </u>
                        <div class="row">
                            <div class="col-4 row mb-2">
                                <label class="col-3 col-form-label">R</label>
                                <div class="col-sm-9 mb-2">
                                    <input type="text" id="R" autocomplete="off" class="form-control mb-2">
                                    <input type="hidden" id="R1" autocomplete="off" class="form-control mb-2">
                                </div>
                            </div>
                            <div class="col-4 row mb-2">
                                <label class="col-3 col-form-label">Rate</label>
                                <div class="col-sm-9 mb-2">
                                    <input type="text" id="Rate" autocomplete="off" class="form-control mb-2" disabled>
                                    <input type="hidden" id="Rate1" autocomplete="off" class="form-control mb-2">
                                </div>

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4 row mb-2">
                                <label class="col-3 col-form-label">H</label>
                                <div class="col-sm-9 mb-2">
                                    <input type="text" id="H" autocomplete="off" class="form-control mb-2">
                                    <input type="hidden" id="H1" autocomplete="off" class="form-control mb-2">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4 row mb-2">
                                <label class="col-3 col-form-label">L</label>
                                <div class="col-sm-9 mb-2">
                                    <input type="text" id="L" autocomplete="off" class="form-control mb-2">
                                    <input type="hidden" id="L1" autocomplete="off" class="form-control mb-2">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-4 row mb-2">
                                <label class="col-3 col-form-label">W</label>
                                <div class="col-sm-9 mb-2">
                                    <input type="text" id="W" autocomplete="off" class="form-control mb-2">
                                    <input type="hidden" id="W1" autocomplete="off" class="form-control mb-2">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-4 row mb-2">
                                <label class="col-3 col-form-label">O</label>
                                <div class="col-sm-9 mb-2">
                                    <input type="text" id="O" autocomplete="off" class="form-control mb-2">
                                    <input type="hidden" id="O1" autocomplete="off" class="form-control mb-2">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4 row mb-2">
                                <label class="col-3 col-form-label">%</label>
                                <div class="col-sm-9 mb-2">
                                    <input type="text" id="Per" autocomplete="off" onfocusout="total();" class="form-control mb-2">
                                    <input type="hidden" id="Per1" autocomplete="off" class="form-control mb-2">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </form>
</body>
<script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
<script>
    function bajar() {
        var Bajar = $('#Bajar').val();
        var Bad = $('#Bad').val(Bajar * 0.05);
        var Bad = $('#Bad').val();
        var Br = $('#Br').val(Bajar - Bad);
    }

    function total() {

        var Bajar = $('#Bajar').val();
        var Br = $('#Br').val();
        var R = $('#R').val();
        var L = $('#L').val();
        var W = $('#W').val();
        var O = $('#O').val();
        var Per = $('#Per').val();

        var Ans1 = $('#R1').val(R * R * 0.000007361 * L);

        var Ans1 = $('#R1').val();
        var Ans2 = $('#H1').val(Ans1 - W);

        var Ans2 = $('#H1').val();
        var Ans3 = $('#L1').val(Ans1 * Bajar);

        var Ans2 = $('#H1').val();
        var Ans4 = $('#W1').val(Ans2 * Br);

        var Ans3 = $('#L1').val();
        var Ans4 = $('#W1').val();
        var Ans5 = $('#O1').val(Ans3 - Ans4);

        var Ans5 = $('#O1').val();
        var Ana6 = $('#Per1').val(Number(O) + Number(Ans5));

        var Ans6 = $('#Per1').val();
        var Ans7 = $('#Rate1').val(Ans6 * Per / 100);

        var Ans6 = $('#Per1').val();
        var Ans7 = $('#Rate1').val();

        var Ans8 = $('#Rate').val(Number(Ans6) + Number(Ans7));

    }
</script>

</html>
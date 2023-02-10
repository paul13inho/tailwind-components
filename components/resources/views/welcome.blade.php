@extends('_partials.base')
@section('title', 'teste')

@section('content')


    <form name="form1">
        <fieldset class="buttons">
            <legend>How much do you need?</legend>
            <label>
                <input type="radio" name="check" value="1">
                <span></span>
                <p>$ 100.00</p>
            </label>

            <label>
                <input type="radio" name="check" value="2">
                <span></span>
                <p>$ 200.00</p>
            </label>

            <label>
                <input type="radio" name="check" value="3">
                <span></span>
                <p>$ 300.00</p>
            </label>

            <label>
                <input type="radio" name="check" value="4">
                <span></span>
                <p>$ 400.00</p>
            </label>

            <label>
                <input type="radio" name="check" value="5">
                <span></span>
                <p>$ 500.00</p>
            </label>

            <label>
                <input type="radio" name="check" value="6" onclick="showTextInput(6)">
                <span></span>
                <p>Other</p>
            </label>


            <input type="text" id="otherAmount" name="otherAmount" onkeypress="return event.charCode >= 48 && event.charCode <= 57" disabled>


        </fieldset>
    </form>

    <script type="text/javascript">

        function showTextInput(x){
            const btn = document.getElementById("otherAmount");
            if (x == 6){
                btn.removeAttribute("disabled");
            }
        }
    </script>

    <script src="https://code.jquery.com/jquery-3.6.2.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.js"></script>

    <script>
        $('#otherAmount').mask("#,##0.00", {reverse: true});
    </script>

    <script type="text/javascript">
        var radios = document.querySelectorAll("input[type=radio]");
        for (var i = 0, iLen = radios.length; i < iLen; i++) {
            radios[i].onclick = function() {
                showResult(this.name);
            }
        }

        function showResult(name) {
            var x = document.getElementsByName(name);
            for (var i = 0; i < x.length; i++) {
                x[i].disabled = true;
            }
        }
    </script>

@endsection

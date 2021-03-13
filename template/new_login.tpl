{extends file="layout.tpl"}

{block name="body"}

    <div class="container p-3 my-3">
        <div class="card">
        <div class="row justify-content-center align-items-center">
            <div class="col-lg-4 col-lg-offset-4" style="margin-top: 10%;">
                <form id="login" method="post" action="save.php"> 
                    <h1>LOGIN</h1>
                    <div class="form-group">
                        <lable>username</lable>
                        <input type="text" id="username" name="username" class="form-control validate[required]">
                    </div>
                    <div class="form-group">
                        <label>password</label>
                        <input type="password" id="password" name="password" class="form-control validate[required]">
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-success" value="sign-in">
                    </div>
                </form>
            </div>
        </div>
        </div>
    </div>
    
{/block}

{block name=custom_style}
    <link rel="stylesheet" href="assets/vendors/css/validationEngine.jquery.css">
{/block}

{block name=custom_script}
    <script src="assets/vendors/js/languages/jquery.validationEngine-en.js"></script>
    <script src="assets/vendors/js/jquery.validationEngine.js"></script>
    <script>
        $(function() {
            $("#login").validationEngine();
        })
    </script>
{/block}
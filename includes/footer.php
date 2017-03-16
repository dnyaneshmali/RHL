<footer class="page-footer">
            <div class="footer-copyright">
                <div class="container">
                    Copyright &copy; 2017
                    <a class="white-text" href="http://softinfology.com">Softinfology</a> All Right Reserved
                    <span class="right">Design & Developed By: Softinfology Pvt.Ltd</span>
                </div>
            </div>

        </footer>

        <script type="text/javascript" src="js/jquery-2.1.1.js"></script>
        <script type="text/javascript" src="js/materialize.js"></script>
        <script type="text/javascript" src="js/validation/jquery.validate.min.js"></script>
        <script type="text/javascript" src="js/validation/additional-methods.min.js"></script>
        <script type="text/javascript" src="js/jquery.form.min.js"></script>
        <script>
             $(document).ready(function() {
                var today = new Date();
var date = today.getFullYear()+'/'+(today.getMonth()+1)+'/'+today.getDate();
var time = today.getHours() + ":" + today.getMinutes() + ":" + today.getSeconds();
var dateTime = today.toDateString();
$("#cdate").html(dateTime);
//$("#time").html(time);
            });
        </script>
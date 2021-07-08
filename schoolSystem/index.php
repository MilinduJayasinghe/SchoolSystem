<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>School system</title>
    <link href="https://fonts.googleapis.com/css2?family=Sacramento&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@300&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="assets/Bootstrap/css/bootstrap.min.css">
    <script src="assets/Bootstrap/js/jquery.min.js"></script>
    <script src="assets/Bootstrap/js/popper.min.js"></script>
    <script src="assets/Bootstrap/js/bootstrap.js"></script>
    <script src="assets/Bootstrap/js/bootstrap.min.js"></script>
    <!---------------------css-------------------------->
    <Style>
        * {
            padding: 0px;
            margin: 0px;
            box-sizing: border-box
        }

        body {
            background-color: rgb(0, 255, 242);
            color: whitesmoke;

        }

        .main {
            background-image: url(assets/img/m.jpg);
            background-position-x: center;
            height: 755px;
        }
        nav {
            display: flex;
            align-items: center;
            padding-top: 25px;

        }

        ul {
            margin-left: auto;
            padding: auto;
            display: flex;
        }

        li {
            
            font-family: 'Roboto Mono', monospace;
            list-style: none;
            margin-left: auto;
            justify-content: space-around;
            margin-right: 45px;
            padding-top: 12px;

        }

        .log {
            color: whitesmoke;
            font-family: 'Sacramento', cursive;
            margin-left: 35px;
            font-size: 20px;
            padding-top: 5px;

        }

        .M {
            font-size: 25px;
        }

        h5{
            font-family: 'Roboto Mono', monospace;
            padding-right: 10px;
            margin-top: 5px;
        }

        .aboutus{
            text-align: center;
            margin-top: 100px;
        }

        .aboutus p{
            text-align: justify;
        }
        .contactus{
            text-align: center;
            margin-top: 100px;
        }

        .contactus table{
            text-align: center;
        }

        .t1{
            margin-left: 485px;
            margin-top: 10px;
        }
    </Style>
</head>
<body>
<div class="main">
        
        <div class="second">
            <nav>
                <div class="log">
                    <h4><span class="M">S</span>chool System</h4>
                </div>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li> <a href="view/student/addstudent.html">New Student</a></li>
                    <li> <a href="view/student/deletestudent.html">Delete Student</a></li>
                    <li><a href="view/student/update.html">Upadate Student</a></li>
                </ul>
            </nav>
        </div>
        <div class="container">
            <a href="view/student/addstudent.html">Now You Can Create</a>
            <div class="aboutus">
            <h4>About Us</h4>
            <p>
             Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus, dolor quasi praesentium quidem dolorem aut, animi alias exercitationem facilis ipsa harum deleniti, consequatur quas adipisci ex repellat eos porro doloremque? Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam quas a deserunt doloremque accusantium repellat sunt repellendus. Aspernatur voluptatem repellat explicabo. Ullam mollitia iure delectus ab neque doloribus eaque maiores? Lorem ipsum dolor, sit amet consectetur adipisicing elit. Deserunt excepturi similique dolorem esse eum soluta nulla, repellat enim quisquam consectetur quidem ab culpa omnis minima veritatis numquam repudiandae pariatur quos. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad impedit autem qui error sunt vel nesciunt est ipsa nulla consequuntur nihil voluptatem, dolorem soluta commodi exercitationem dicta mollitia odit dolores.
            </p>
            </div>
            <div class="contactus">
                <h4>Contact Us</h4> 
                <div class="t1">
                <table>
                    <tr>
                        <td>Mobile  </td>
                        <td>:01120000000</td>
                    </tr>
                    <tr>
                        <td style="text-align:left ;">Fax </td>
                        <td>:01140101102</td>
                    </tr>
                </table>
                
                </div>
                
            </div>
            
        </div>
        
    </div>
   
</body>
</html>
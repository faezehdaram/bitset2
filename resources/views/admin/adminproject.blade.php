<html dir="rtl" lang="fa-IR">
<meta charset="utf-8">
    <head>
    <title>index_html</title>
    <style type="text/css">
    .header {
    
    text-align:center;
    color:black;
    
      background-color:blueviolet;
      padding:20px
      
    }   

    * {
      box-sizing: border-box;
    }
        .dropbtn {
           background-color:cornflowerblue;
          color: white;
         padding: 16px;
  font-size: 16px;
  border: none;
  cursor: pointer;
}
body {
        background-repeat: no-repeat;
        background-position: right top;
        background-attachment: scroll;
        background-color:deeppink;
        
    }

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
  display: block;
}

.dropdown:hover .dropbtn {
  background-color: #3e8e41;
}
        h4{color:fuchsia;font-style:normal;}
        p{font-style: italic;color: darkblue;}
        h1{color: darkblue;}
        li{color: darkmagenta;}
        #example1{background-image: url("./vvvvvvvvvv");
                      background-repeat: no-repeat;
                       background-position: center;
                      background-attachment: scroll; 
                      padding: 15pt;
                      
                   }
        #example2{
            background-image: url("./b1");
                      background-repeat: no-repeat;
                       background-position:center;
                      background-attachment: scroll; 
                      padding: 15pt;
        }
        
        div {
      border-radius: 25px;
      background-color: #f2f2f2;
      padding: 20px;
    } 
         .mySlides {display: none;}
         img {vertical-align: middle;}
         .slideshow-container {
         max-width: 1000px;
         position: relative;
          margin: auto;
         }
         .text {
          color: #f2f2f2;
          font-size: 15px;
          padding: 8px 12px;
           position: absolute;
           bottom: 8px;
           width: 100%;
           text-align: center;
         }
         .numbertext {
            color: #f2f2f2;
            font-size: 12px;
            padding: 8px 12px;
            position: absolute;
            top: 0;
          }
          


         .dot {
         height: 15px;
         width: 15px;
         margin: 0 2px;
         background-color: #bbb;
         border-radius: 50%;
         display: inline-block;
         transition: background-color 0.6s ease;
         }

         .active {
         background-color: #717171;
          }
          .fade {
          -webkit-animation-name: fade;
          -webkit-animation-duration: 1.5s;
           animation-name: fade;
           animation-duration: 1.5s;
            }

         @-webkit-keyframes fade {
         from {opacity: .4} 
         to {opacity: 1}
         }

        @keyframes fade {
          from {opacity: .4} 
          to {opacity: 1}
         }


         @media only screen and (max-width: 300px) {
          .text {font-size: 11px}
         }
         input[type=text], input[type=password] {
          width: 100%;
          padding: 15px;
          margin: 5px 0 22px 0;
          display: inline-block;
          border: none;
          background: #f1f1f1;
        }
        
        
        input[type=text]:focus, input[type=password]:focus {
          background-color: #ddd;
          outline: none;
        } 
        .cancelbtn {
          padding: 14px 20px;
          background-color: #f44336;
        }
        
        
        .cancelbtn, .signupbtn {
          float: left;
          width: 50%;
        }
        
        
        .container {
          padding: 16px;
        }
        
        
        .modal {
          display: none; 
          position: fixed; 
          z-index: 1; 
          left: 0;
          top: 0;
          width: 100%; 
          height: 100%; 
          overflow: auto; 
          background-color: #474e5d;
          padding-top: 50px;
        }
        
        
        .modal-content {
          background-color: #fefefe;
          margin: 5% auto 15% auto; 
          border: 1px solid #888;
          width: 80%; 
        }
        
        
        hr {
          border: 1px solid #f1f1f1;
          margin-bottom: 25px;
        }
         
        
        .close {
          position: absolute;
          right: 35px;
          top: 15px;
          font-size: 40px;
          font-weight: bold;
          color: #f1f1f1;
        }
        
        .close:hover,
        .close:focus {
          color: #f44336;
          cursor: pointer;
        }
        
        
        .clearfix::after {
          content: "";
          clear: both;
          display: table;
        }
        
         
        @media screen and (max-width: 300px) {
          .cancelbtn, .signupbtn {
             width: 100%;
          }
        }
        ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color:cyan;
}

li {
  float: right;
  border-right:1px solid #bbb;
}

li:last-child {
  border-right: none;
}

li a {
  display: block;
  color:indigo;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover:not(.active) {
  background-color:hotpink;
}

.active {
  background-color:hotpink;
}
.container {
            margin: 20px auto;
            width: 24%;
            text-align: left;
            border: 1px solid #ABB2B9;
            padding: 14px 26px;
            border-radius: 6px;
        }

        .form-control {
            padding: 8px;
        }

        input {
            border-radius: 5px;
            border: 1px solid #ABB2B9;
            padding: 8px 9px;
        }

        input#articles_id {
            margin-left: 37px;
        }

        input#text {
            margin-left: 37px;
        }

        input[type="submit"] {
            background-color: dodgerblue;
            color: black ;
            cursor: pointer;
        }
        table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  background-color: white;
  width: 100%;
}

td, th {
  border: 1px solid black;
  text-align: right;
  padding: 8px;
}
        label {
            margin-right: 22px;
        }
        .grid-container{
    display:grid;
    grid-template-columns:auto auto;
    background-color:#ABB2B9;
    padding:10px;
    grid-gap:20px;
}
.grid-item{
    background-color:white;
    border:1px solid rgba(0,0,0,0.8);
    padding:20px;
    text-align:right;
}
        </style>

   </head>
   <body style="direction: rtl;">
   <p style="font-size:30px; text-align: center;color: black;">BITSET</p>
        <ul>
        <li><a href="/onlyforadmin">برگشت</a></li>
        <li><a href="/">خروج</a></li>
        <li style="float:left"><a href="/about">درباره ما</a></li>

      </ul> <br>
    
    <br><h1 id="home">نام پروژه و برنامه نویس آن:</h1><br>
      <div>
      
        <table>
         <tr>
         <th style="width: 7%;">شماره شناسه</th>
          <th style="width: 14%;">نام پروژه</th>
          <th style="width: 14%;">هزینه</th>
          <th style="width: 7%;">کد پرسنلی برنامه نویس</th>
          <th style="width: 20%;">نام کارفرما</th>
         </tr>
        @foreach($Requests as $request)
          <tr>
          <td>{{$request->id}}</td>
          <td>{{$request->name}}</td>
          <td>{{$request->price}}</td>
          <td>{{$request->user_id }}</td>
          <td>{{$request->employername }}</td>
          </tr>
        @endforeach
      </table>
    </div><br><br><h1 id="home">نام  برنامه نویسان و کد پرسنلی آنها:</h1><br>
      <div>
        <table style="width: 40%;">
         <tr>
           <th style="width: 7%;">کد پرسنلی</th>
           <th style="width: 14%;">نام برنامه نویس</th>
           <th style="width: 14%;">ایمیل</th>
         </tr>
        @foreach($User as $user)
         @if($user->role_id=='3')
          <tr>
           <td>{{$user->id}}</td>
           <td>{{$user->name}}</td>
           <td>{{$user->email}}</td>
          </tr>
          @endif
        @endforeach
      </table>
    </div><br><br><h1 id="home">اضافه کردن برنامه نویس:</h1><br>
    <div class="grid-container">
       <div class="grid-item">
    <form action="/addprogramer" method="post">
         @csrf
         <div class="form-control">
              <label for='name'>کد پرسنلی:</label>
                <input type="text" id="name" name="id" placeholder="کد پرسنلی اینجا وارد شود" autocomplete="off">
            </div> <br>
            <div class="form-control">
              <label for='name'>کد نقش</label>
                <input type="text" id="name" name="role_id" placeholder="کد پرسنلی اینجا وارد شود" autocomplete="off">
            </div> <br>
            <input type="submit" value="ثپت">
    </form>
    </div>
    <div class="grid-item" style=" background-color:#FFC0CB">
    <h1 id="home">کد نقش:</h1>
    <table style="width: 50%;">
         <tr>
           <th style="width: 7%;">کد ادمین</th>
           <th style="width: 14%;">کد کاربر</th>
           <th style="width: 14%;">کد برنامه نویس</th>
         </tr>
          <tr>
           <td>2</td>
           <td>1</td>
           <td>3</td>
          </tr>
      </table>



    </div>
    </div>
      </body>
    <br>
   <hr style="color=black">
   <div>
   <footer background-color:white >
        ایران </br>
        خوزستان </br>
        بندر ماهشهر  </br>
        ناحیه صنعتی </br>
        تمامی حقوق این سایت متعلق به شرکت BITSET است
   </footer>
        
   </div>
</html>

<?php


include('config.php');
?>
<!DOCTYPE html>
<html>

<head>
  <div class="receipts-wrapper">
    <div class="receipts" id="printableArea">
      <title>Atal Pension</title>
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
      <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
      <style>
        html,
        body {
          min-height: 100%;
          padding: 0;
          margin: 0;
          font-family: Roboto, Arial, sans-serif;
          font-size: 14px;
          color: #666;
        }

        h1 {
          margin: 0 0 20px;
          font-weight: 400;
          color: #1c87c9;
        }

        p {
          margin: 0 0 5px;
        }

        .main-block {
          display: flex;
          flex-direction: column;
          justify-content: center;
          align-items: center;
          min-height: 100vh;
          background: #aaff80;
        }

        form {
          padding: 25px;
          margin: 25px;
          box-shadow: 0 2px 5px #f5f5f5;
          background: #f5f5f5;
        }

        .fas {
          margin: 25px 10px 0;
          font-size: 72px;
          color: #fff;
        }

        .fa-envelope {
          transform: rotate(-20deg);
        }

        .fa-at,
        .fa-mail-bulk {
          transform: rotate(10deg);
        }

        input,
        textarea {
          width: calc(100% - 18px);
          padding: 8px;
          margin-bottom: 20px;
          border: 1px solid #1c87c9;
          outline: none;
        }

        input::placeholder {
          color: #666;
        }
      </style>
</head>

</html>


<!DOCTYPE html>
<html>

<head>
  <title>New Member Registration</title>
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
  <style>
    html,
    body {
      min-height: 100%;
    }

    body,
    div,
    form,
    input,
    select,
    textarea,
    label,
    p {
      padding: 0;
      margin: 0;
      outline: none;
      font-family: Roboto, Arial, sans-serif;
      font-size: 14px;
      color: #666;
      line-height: 22px;
    }

    body {
      background-color: black;
    }

    h1 {
      position: absolute;
      margin: 0;
      font-size: 40px;
      color: black;
      z-index: 2;
      line-height: 83px;
    }

    textarea {
      width: calc(100% - 12px);
      padding: 5px;
    }

    .testbox {
      display: flex;
      justify-content: center;
      align-items: center;
      height: inherit;
      padding: 20px;
    }

    form {
      width: 90%;
      padding: 20px;
      border-radius: 6px;
      background: #fff;
      box-shadow: 0 0 8px #669999;
    }

    .banner {
      position: relative;
      height: 300px;
      background-image: url("/uploads/media/default/0001/02/c1504011491c4e04e5158b63a27a4ea654b03ed1.jpeg");
      background-size: cover;
      display: flex;
      justify-content: center;
      align-items: center;
      text-align: center;
    }

    .banner::after {
      content: "";
      background-color: lightskyblue;
      position: absolute;
      width: 100%;
      height: 100%;
    }

    input,
    select,
    textarea {
      margin-bottom: 10px;
      border: 1px solid #ccc;
      border-radius: 3px;
    }

    input {
      width: calc(100% - 10px);
      padding: 5px;
    }

    input[type="date"] {
      padding: 4px 5px;
    }

    textarea {
      width: calc(100% - 12px);
      padding: 5px;
    }

    .item:hover p,
    .item:hover i,
    .question:hover p,
    .question label:hover,
    input:hover::placeholder {
      color: #669999;
    }

    .item input:hover,
    .item select:hover,
    .item textarea:hover {
      border: 1px solid transparent;
      box-shadow: 0 0 3px 0 #669999;
      color: #669999;
    }

    .item {
      position: relative;
      margin: 10px 0;
    }

    .item span {
      color: red;
    }

    .week {
      display: flex;
      justfiy-content: space-between;
    }

    .colums {
      display: flex;
      justify-content: space-between;
      flex-direction: row;
      flex-wrap: wrap;
    }

    .colums div {
      width: 48%;
    }

    input[type="date"]::-webkit-inner-spin-button {
      display: none;
    }

    .item i,
    input[type="date"]::-webkit-calendar-picker-indicator {
      position: absolute;
      font-size: 20px;
      color: #a3c2c2;
    }

    .item i {
      right: 1%;
      top: 30px;
      z-index: 1;
    }

    input[type=radio],
    input[type=checkbox] {
      display: none;
    }

    label.radio {
      position: relative;
      display: inline-block;
      margin: 5px 20px 15px 0;
      cursor: pointer;
    }

    .question span {
      margin-left: 30px;
    }

    .question-answer label {
      display: block;
    }

    label.radio:before {
      content: "";
      position: absolute;
      left: 0;
      width: 17px;
      height: 17px;
      border-radius: 50%;
      border: 2px solid #ccc;
    }

    input[type=radio]:checked+label:before,
    label.radio:hover:before {
      border: 2px solid #669999;
    }

    label.radio:after {
      content: "";
      position: absolute;
      top: 6px;
      left: 5px;
      width: 8px;
      height: 4px;
      border: 3px solid #669999;
      border-top: none;
      border-right: none;
      transform: rotate(-45deg);
      opacity: 0;
    }

    input[type=radio]:checked+label:after {
      opacity: 1;
    }

    .flax {
      display: flex;
      justify-content: space-around;
    }

    .btn-block {
      margin-top: 10px;
      text-align: center;
    }

    button {
      width: 150px;
      padding: 10px;
      border: none;
      border-radius: 5px;
      background: #669999;
      font-size: 16px;
      color: #fff;
      cursor: pointer;
    }

    button:hover {
      background: #a3c2c2;
    }

    @media (min-width: 568px) {

      .name-item,
      .city-item {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
      }

      .name-item input,
      .name-item div {
        width: calc(50% - 20px);
      }

      .name-item div input {
        width: 97%;
      }

      .name-item div label {
        display: block;
        padding-bottom: 5px;
      }
    }
  </style>
</head>

<body>

  <div class="testbox">
    <form action="/">
      <?php
      if (isset($_GET['t_id'])) {
        $user_id = $_GET['t_id'];
        $query = "SELECT * FROM atalpension WHERE id='$user_id'";
        $query_run = mysqli_query($con, $query);
        if (mysqli_num_rows($query_run) > 0) {
          foreach ($query_run as $row) {
      ?>
            <div class="banner">

              <h1><b>Atal Pension </b></h1>
            </div>
            <div class="colums">
              <div class="item">
                <label for="appno"> Application no<span>*</span></label>
                <input id="appno" type="text" name="id" value="<?php echo $row['id'] ?>" required />
              </div>
              <div class="item">
                <label for="name"> Full Name<span>*</span></label>
                <input id="name" type="text" name="name" value="<?php echo $row['name'] ?>" required />
              </div>
              <div class="item">
                <label for="bdate">Date of Birth<span>*</span></label>
                <input id="bdate" type="text" value="<?php echo $row['bdate'] ?>" name="bdate" required />
              </div>
              <div class="item">
                <label for="mno">Mobile Number<span>*</span></label>
                <input id="mno" type="text" name="mno" value="<?php echo $row['mno'] ?>" required />
              </div>
              <div class="item">
                <label for="adno">Adharcard Number<span>*</span></label>
                <input id="adno" type="text" value="<?php echo $row['adno'] ?>" name="adno" required />
              </div>
              <div class="item">
                <label for="city">City<span>*</span></label>
                <input id="city" type="text" value="<?php echo $row['city'] ?>" name="city" required />
              </div>
              <div class="item">
                <label for="pcode">Pincode<span>*</span></label>
                <input id="pcode" type="text" value="<?php echo $row['pcode'] ?>" name="pcode" required />
              </div>
              <div class="item">
                <label for="married">Married<span>*</span></label>
                <input id="married" type="text" value="<?php echo $row['married'] ?>" name="married" required />
              </div>
              <div class="item">
                <label for="gender">Gender<span>*</span></label>
                <input id="gender" type="tel" value="<?php echo $row['gender'] ?>" name="gender" required />
              </div>
              <div class="item">
                <label for="income">Annual Income<span>*</span></label>
                <input id="income" type="tel" value="<?php echo $row['income'] ?>" name="incode" required />
              </div>
              <div class="item">
                <label for="address">Address<span>*</span></label>
                <input id="address" type="tel" value="<?php echo $row['address'] ?>" name="address" required />
              </div>
              <div class="item">
                <label for="phone">Bank<span>*</span></label>
                <input id="phone" type="tel" value="<?php echo $row['bank'] ?>" name="phone" required />
              </div>
              <div class="item">
                <label for="bbank">Bank Branch<span>*</span></label>
                <input id="bbank" type="tel" value="<?php echo $row['bbank'] ?>" name="bbank" required />
              </div>

              <div class="item">
                <label for="ano">Account Number<span>*</span></label>
                <input id="ano" type="tel" value="<?php echo $row['ano'] ?>" name="ano" required />
              </div>
            </div>
            <div class="item">
              <label for="Remark">Remark<span>*</span></label>
              <input id="Remark" placeholder="Your apllication still pending" type="tel" value="<?php echo $row['Remark'] ?>" name="Remark" required />
            </div>
            <div class="item">
              <label for="Status">Status<span>*</span></label>
              <input id="Status" placeholder=" pending" type="tel" value="<?php echo $row['Status'] ?>" name="Status" required />
            </div>





    </form>


  </div><!-- // End #container -->
  </div>
<?php
          }
        }
      }
?>
<script>
  function printDiv(divName) {
    var printContents = document.getElementById(divName).innerHTML;
    var originalContents = document.body.innerHTML;

    document.body.innerHTML = printContents;

    window.print();

    document.body.innerHTML = originalContents;
  }
</script>
<a href="user.php" type="submit" class=" btn btn-primary" style="color:#fff;">Done</a>
<input type="button" class="btn btn-primary btn-sm float-right" onclick="printDiv('printableArea')" value="Download" />

<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="script.js"></script>
</body>

</html>
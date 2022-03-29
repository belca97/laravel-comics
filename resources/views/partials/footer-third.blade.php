<template>

    <footer>
      <div class="container">
          <div class="footer-third-left">
              <button>SiGN-UP NOW</button>
  
          </div>
          <div class="footer-third-right">
              <ul>
                  <li>
                      <span>FOLLOW US</span>
                  </li>
                  <li><img src="../assets/footer-facebook.png" alt=""></li>
                  <li> <img src="../assets/footer-periscope.png" alt=""></li>
                  <li><img src="../assets/footer-pinterest.png" alt=""></li>
                  <li><img src="../assets/footer-twitter.png" alt=""></li>
                  <li><img src="../assets/footer-youtube.png" alt=""></li>
              </ul>
  
          </div>
      </div>
    </footer>
  </template>
  
  <script>
  export default {
    name: 'MyFooterThird',
  }
  </script>
  
  <style scoped lang='scss'>
  
      @import "../assets/style/variable.scss";
      
  
  
      footer{
          background-color: rgb(48, 45, 45);
          height: 160px;
          color: $colorFooterThird;
          font-weight: bold;
          position: relative;
          z-index: 1000;
      }
  
      .container{
          width: 70%;
          height: 100%;
          margin: 0 auto;
      }
      .container::after{
          content: '';
          display: table;
          clear: both;
      }
      .footer-third-left{
          width: 15%;
          height: 100%;
          float: left;
          display: flex;
          align-items: center;
      }
      .footer-third-right{
          width: 50%;
          height: 100%;
          float: right;
      }
      button{
          padding: 16px 32px;
          color: white;
          border: 1px solid $colorFooterFirst;
          background-color: $colorFooterThird;
          font-weight: bold;
      }
      ul li{
          display: inline-block;
          list-style: none;
          padding: 0px 30px;
      }
      ul{
          width: 100%;
          height: 100%;
          display: flex;
          align-items: center;
      }
  
      ul span{
          color: $colorFooterFirst;
      }
  </style>
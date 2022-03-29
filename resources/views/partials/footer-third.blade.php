

    <footer class="footer-third">
      <div class="container-footer-third">
          <div class="footer-third-left">
              <button class="button-footer">SiGN-UP NOW</button>
  
          </div>
          <div class="footer-third-right">
              <ul class="ul-footer-third">
                  <li>
                      <span>FOLLOW US</span>
                  </li>
                  <li><img src="{{asset('/img/footer-facebook.png')}}" alt=""></li>
                  <li> <img src="{{asset('/img/footer-periscope.png')}}" alt=""></li>
                  <li><img src="{{asset('/img/footer-pinterest.png')}}" alt=""></li>
                  <li><img src="{{asset('/img/footer-twitter.png')}}" alt=""></li>
                  <li><img src="{{asset('/img/footer-youtube.png')}}" alt=""></li>
              </ul>
  
          </div>
      </div>
    </footer>

  

  <style>
      
  
  
      .footer-third{
          background-color: rgb(48, 45, 45);
          height: 160px;
          font-weight: bold;
          position: relative;
          z-index: 1000;
      }
  
      .container-footer-third{
          width: 70%;
          height: 100%;
          margin: 0 auto;
      }
      .container-footer-third::after{
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
      .button-footer{
          padding: 16px 32px;
          color: white;
          border: 1px solid rgb(2, 130, 249);
          background-color: rgb(48, 48, 48);
          font-weight: bold;
      }
      .ul-footer-third li{
          display: inline-block;
          list-style: none;
          padding: 0px 30px;
      }
      .ul-footer-third{
          width: 100%;
          height: 100%;
          display: flex;
          align-items: center;
      }
  
      .ul-footer-third span{
          color: rgb(2, 130, 249);
      }
  </style>
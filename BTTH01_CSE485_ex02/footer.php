<style>.music-garden {
      font-weight: bold;
      text-align: center;
      margin-top: 20px;
      
    }
    .mag {
      margin-top: 3rem;
    }
    .music-garden {
      font-weight: bold;
      text-align: center;
      margin-top: 20px;
      position: relative;
      padding: 10px;
    }

    .music-garden::before,
    .music-garden::after {
      content: "";
      position: absolute;
      left: 0;
      right: 0;
      height: 1px;
      background-color: black;
    }

    .music-garden::before {
      top: -10px;
    }

    .music-garden::after {
      bottom: -10px;
    }
    </style>
<html><footer>
    <div class="mag"></div>
    <div class="music-garden">TLU's Music garden</div>
  </footer></html>
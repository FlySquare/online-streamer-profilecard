<!DOCTYPE html>
<?php
$username = "ksinc";
//Veri çekeceğimiz site
$site = file_get_contents("https://sullygnome.com/channel/$username");
//Veri çekeceğimiz site
//Veri çekeceğimiz html kodları
preg_match_all('@<span class="PageHeaderMiddleWithImageHeaderP1">(.*?)</span>@si', $site, $name);
//Veri çekeceğimiz html kodları
$namecikti = implode("p", $name[1]);
$namedizi = explode ("p",$namecikti);
//Veri çekeceğimiz ikinci html kodları
preg_match_all("@<div class='MiddleSubHeaderItemValue'>(.*?)</div>@si", $site, $followers);
$followerscikti = implode("p", $followers[1]);
$followersdizi = explode ("p",$followerscikti);
preg_match_all('@<div class="ChannelStatus">(.*?)</div>@si', $site, $lastitle);
$titlecikti = implode("p", $lastitle[1]);
$titledizi = explode ("p",$titlecikti);
$metin = $titledizi[0];
$title = explode ("-",$metin);

preg_match_all('@<div class="InfoStatPanelTLCell">(.*?)</div>@si', $site, $view);
$viewcikti = implode("p", $view[1]);
$vievdizi = explode ("p",$viewcikti);

?>



<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title><?php echo $namedizi[0] ?> | From Umut Can Arda</title>
  <meta name="viewport"
      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel="stylesheet" href="./style.css">
<script src="https://kit.fontawesome.com/2345f97192.js" crossorigin="anonymous"></script>
</head>
<body>
<!-- partial:index.partial.html -->
<div class="wrapper">

  
  <div class="profile-card js-profile-card">
    <div class="profile-card__img">
      <img src="https://static-cdn.jtvnw.net/jtv_user_pictures/9994b163-6783-4419-b7a3-7b810ed1d8d8-profile_image-150x150.png" alt="profile card">
    </div>

    <div class="profile-card__cnt js-profile-cnt">
      <div class="profile-card__name"><?php echo $namedizi[0] ?></div>
      <div class="profile-card__txt"><?php echo $title[1] ?></div>
      <div class="profile-card-loc">
    

        <span class="profile-card-loc__txt">
        <i class="fas fa-language fa-lg"></i>&nbsp <?php echo $followersdizi[4];?></span>
      </div>

      <div class="profile-card-inf">
        <div class="profile-card-inf__item">
          <div class="profile-card-inf__title"><?php echo $followersdizi[0];?></div>
          <div class="profile-card-inf__txt">Takipçi</div>
        </div>

        <div class="profile-card-inf__item">
          <div class="profile-card-inf__title"><?php echo $followersdizi[1];?></div>
          <div class="profile-card-inf__txt">Toplam İzlenme</div>
        </div>

        <div class="profile-card-inf__item">
          <div class="profile-card-inf__title"><?php echo $vievdizi[0];?></div>
          <div class="profile-card-inf__txt">Ort. İzleyici</div>
        </div>

        <div class="profile-card-inf__item">
          <div class="profile-card-inf__title"><?php echo $vievdizi[1];?></div>
          <div class="profile-card-inf__txt">Saat İzlendi</div>
        </div>
      </div>

      <div class="profile-card-social">
        <a href="https://www.facebook.com/ksinctwitchgrubu/" class="profile-card-social__item facebook" target="_blank">
          <span class="icon-font">
              <svg class="icon"><use xlink:href="#icon-facebook"></use></svg>
          </span>
        </a>

        <a href="https://www.instagram.com/ksinctv" class="profile-card-social__item instagram" target="_blank">
          <span class="icon-font">
              <svg class="icon"><use xlink:href="#icon-instagram"></use></svg>
          </span>
        </a>

        <a href="https://discordapp.com/invite/cMTRmrP" class="profile-card-social__item behance" target="_blank">
          <span class="icon-font">
          <i class="fab fa-discord fa-sm"></i>
          </span>
        </a>


      </div>

      <div class="profile-card-ctr">
        <button class="profile-card__button button--blue js-message-btn">Sponsorluk</button>
        <a target="_blank" href="https://www.twitch.tv/ksinc" ><button class="profile-card__button button--orange">Twitch.TV</button></a>
      </div>
    </div>

    <div class="profile-card-message js-message">
      <form class="profile-card-form">
        <div class="profile-card-form__container">
          <textarea placeholder="Biraz saçmalamaya ne dersin?.."></textarea>
        </div>

        <div class="profile-card-form__bottom">
          <button class="profile-card__button button--blue js-message-close">
            Gönder
          </button>

          <button class="profile-card__button button--gray js-message-close">
            Geri
          </button>
        </div>
      </form>

      <div class="profile-card__overlay js-message-close"></div>
    </div>

  </div>

</div>

<svg hidden="hidden">
  <defs>
    
    <symbol id="icon-facebook" viewBox="0 0 32 32">
      <title>facebook</title>
      <path d="M19 6h5v-6h-5c-3.86 0-7 3.14-7 7v3h-4v6h4v16h6v-16h5l1-6h-6v-3c0-0.542 0.458-1 1-1z"></path>
    </symbol>

    <symbol id="icon-instagram" viewBox="0 0 32 32">
      <title>instagram</title>
      <path d="M16 2.881c4.275 0 4.781 0.019 6.462 0.094 1.563 0.069 2.406 0.331 2.969 0.55 0.744 0.288 1.281 0.638 1.837 1.194 0.563 0.563 0.906 1.094 1.2 1.838 0.219 0.563 0.481 1.412 0.55 2.969 0.075 1.688 0.094 2.194 0.094 6.463s-0.019 4.781-0.094 6.463c-0.069 1.563-0.331 2.406-0.55 2.969-0.288 0.744-0.637 1.281-1.194 1.837-0.563 0.563-1.094 0.906-1.837 1.2-0.563 0.219-1.413 0.481-2.969 0.55-1.688 0.075-2.194 0.094-6.463 0.094s-4.781-0.019-6.463-0.094c-1.563-0.069-2.406-0.331-2.969-0.55-0.744-0.288-1.281-0.637-1.838-1.194-0.563-0.563-0.906-1.094-1.2-1.837-0.219-0.563-0.481-1.413-0.55-2.969-0.075-1.688-0.094-2.194-0.094-6.463s0.019-4.781 0.094-6.463c0.069-1.563 0.331-2.406 0.55-2.969 0.288-0.744 0.638-1.281 1.194-1.838 0.563-0.563 1.094-0.906 1.838-1.2 0.563-0.219 1.412-0.481 2.969-0.55 1.681-0.075 2.188-0.094 6.463-0.094zM16 0c-4.344 0-4.887 0.019-6.594 0.094-1.7 0.075-2.869 0.35-3.881 0.744-1.056 0.412-1.95 0.956-2.837 1.85-0.894 0.888-1.438 1.781-1.85 2.831-0.394 1.019-0.669 2.181-0.744 3.881-0.075 1.713-0.094 2.256-0.094 6.6s0.019 4.887 0.094 6.594c0.075 1.7 0.35 2.869 0.744 3.881 0.413 1.056 0.956 1.95 1.85 2.837 0.887 0.887 1.781 1.438 2.831 1.844 1.019 0.394 2.181 0.669 3.881 0.744 1.706 0.075 2.25 0.094 6.594 0.094s4.888-0.019 6.594-0.094c1.7-0.075 2.869-0.35 3.881-0.744 1.050-0.406 1.944-0.956 2.831-1.844s1.438-1.781 1.844-2.831c0.394-1.019 0.669-2.181 0.744-3.881 0.075-1.706 0.094-2.25 0.094-6.594s-0.019-4.887-0.094-6.594c-0.075-1.7-0.35-2.869-0.744-3.881-0.394-1.063-0.938-1.956-1.831-2.844-0.887-0.887-1.781-1.438-2.831-1.844-1.019-0.394-2.181-0.669-3.881-0.744-1.712-0.081-2.256-0.1-6.6-0.1v0z"></path>
      <path d="M16 7.781c-4.537 0-8.219 3.681-8.219 8.219s3.681 8.219 8.219 8.219 8.219-3.681 8.219-8.219c0-4.537-3.681-8.219-8.219-8.219zM16 21.331c-2.944 0-5.331-2.387-5.331-5.331s2.387-5.331 5.331-5.331c2.944 0 5.331 2.387 5.331 5.331s-2.387 5.331-5.331 5.331z"></path>
      <path d="M26.462 7.456c0 1.060-0.859 1.919-1.919 1.919s-1.919-0.859-1.919-1.919c0-1.060 0.859-1.919 1.919-1.919s1.919 0.859 1.919 1.919z"></path>
    </symbol>

    

    <symbol id="icon-behance" viewBox="0 0 32 32">
      <title>behance</title>
      <path d="M9.281 6.412c0.944 0 1.794 0.081 2.569 0.25 0.775 0.162 1.431 0.438 1.988 0.813 0.55 0.375 0.975 0.875 1.287 1.5 0.3 0.619 0.45 1.394 0.45 2.313 0 0.994-0.225 1.819-0.675 2.481-0.456 0.662-1.119 1.2-2.006 1.625 1.213 0.35 2.106 0.962 2.706 1.831 0.6 0.875 0.887 1.925 0.887 3.163 0 1-0.194 1.856-0.575 2.581-0.387 0.731-0.912 1.325-1.556 1.781-0.65 0.462-1.4 0.8-2.237 1.019-0.831 0.219-1.688 0.331-2.575 0.331h-9.544v-19.688h9.281zM8.719 14.363c0.769 0 1.406-0.181 1.906-0.55 0.5-0.363 0.738-0.963 0.738-1.787 0-0.456-0.081-0.838-0.244-1.131-0.169-0.294-0.387-0.525-0.669-0.688-0.275-0.169-0.588-0.281-0.956-0.344-0.356-0.069-0.731-0.1-1.113-0.1h-4.050v4.6h4.388zM8.956 22.744c0.425 0 0.831-0.038 1.213-0.125 0.387-0.087 0.731-0.219 1.019-0.419 0.287-0.194 0.531-0.45 0.706-0.788 0.175-0.331 0.256-0.756 0.256-1.275 0-1.012-0.287-1.738-0.856-2.175-0.569-0.431-1.325-0.644-2.262-0.644h-4.7v5.419h4.625z"></path>
      <path d="M22.663 22.675c0.587 0.575 1.431 0.863 2.531 0.863 0.788 0 1.475-0.2 2.044-0.6s0.913-0.825 1.044-1.262h3.45c-0.556 1.719-1.394 2.938-2.544 3.675-1.131 0.738-2.519 1.113-4.125 1.113-1.125 0-2.131-0.181-3.038-0.538-0.906-0.363-1.663-0.869-2.3-1.531-0.619-0.663-1.106-1.45-1.45-2.375-0.337-0.919-0.512-1.938-0.512-3.038 0-1.069 0.175-2.063 0.525-2.981 0.356-0.925 0.844-1.719 1.494-2.387s1.413-1.2 2.313-1.588c0.894-0.387 1.881-0.581 2.975-0.581 1.206 0 2.262 0.231 3.169 0.706 0.9 0.469 1.644 1.1 2.225 1.887s0.994 1.694 1.25 2.706c0.256 1.012 0.344 2.069 0.275 3.175h-10.294c0 1.119 0.375 2.188 0.969 2.756zM27.156 15.188c-0.462-0.512-1.256-0.794-2.212-0.794-0.625 0-1.144 0.106-1.556 0.319-0.406 0.213-0.738 0.475-0.994 0.787-0.25 0.313-0.425 0.65-0.525 1.006-0.1 0.344-0.163 0.663-0.181 0.938h6.375c-0.094-1-0.438-1.738-0.906-2.256z"></path>
      <path d="M20.887 8h7.981v1.944h-7.981v-1.944z"></path>
    </symbol>

    
  </defs>
</svg>
<!-- partial -->
  <script  src="./script.js"></script>

</body>
</html>
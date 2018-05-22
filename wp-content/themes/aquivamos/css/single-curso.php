html, body {
  font-family: 'Open Sans', sans-serif;
  font-size: 16px;
}
body {
  display: flex;
  min-height: 100vh;
  flex-direction: column;
}
main {
  flex: 1 0 auto;
}
h1, h2, h3, h4, h5, h6 {
  font-family: 'Montserrat', sans-serif;
  font-weight: 400;
}
footer p {
  text-align: center;
  font-size: 12px;
}
footer p a {
  color: #12a641;
  font-weight: bold;
}
footer p a:hover {
  text-decoration: underline;
}
p {
  font-size: 16px;
  line-height: 26px;
  font-weight: 300;
}
.Logo {
  font-size: 1.2rem !important;
  padding: 0 .5rem;
  color: #fff;
  font-weight: 700;
}
.Nav {
	background: #12a641;
	padding: 0 15px; 
}
nav.Nav .nav-wrapper a.button-collapse {
  display: block !important;
}
.Nav-list {
  padding: 0;
  margin: 0;
}

ul#nav-mobile li img {
	width: 40px;
	margin: 12px 0; 
}
.Image-autor {
  height: 64px;
}
.Image-autor a:hover {
  background: none !important;
}
@media only screen and (max-width: 999px) {
  .Body-page {
    justify-content: flex-start;
    flex-direction: column;
  }
  .Video {
    min-width: 100%;
  }
  .Comments {
    min-width: 100%;
  }
  .Contenido {
    padding: 0 10px;
  }
}
@media only screen and (min-width: 1000px) {
  .Body-page {
    justify-content: space-around;
  }
  .Video {
    min-width: 72%;
    padding-left: 30px;
  }
  .Video-top{
    padding: 0px 90px;
    background: #212121;
  }
  .Comments {
    min-width: 28%;
    position: relative;
  }
  .Comments-content {
    position: fixed;
    top: 65px;
    bottom: 0;
    overflow-y: auto; 
  }
}
.Body-page {
  display: flex;
  min-height: 100%;
}
.Video {
  display: flex;
  justify-content: flex-start;
  flex-direction: column;
}
.Title-content {
  padding: 15px;
}
.Video-title {
  font-size: 25px;
  color: #212121;
  margin: 0 !important;
  padding: 0 0 1.3rem 0;
}

.Botones {  display: flex;
  justify-content: flex-end;
  padding: 
}
.Botones button {
  margin-left: 10px;
} 
.Boton-cuenta {
  background: #ff4842 !important;
}

.tabs .tab a{
  color: #12a641 !important;
}
.tabs .tab a:hover,.tabs .tab a.active {
  background-color:transparent !important;
  color:#12a641 !important;
}
.tabs .tab a:hover {
}
.tabs .tab.disabled a,.tabs .tab.disabled a:hover {
  color:rgba(102,147,153,0.7) !important;  
}
.tabs .indicator {
  background-color:#12a641 !important;
}

.Section-comentarioTitle {
  font-size: 16px;
}
.Section-comentarioTitle a {
  color: #12a641;
}
.comment-author {  
  display: flex;
  justify-content: flex-start;
  align-items: center;
}
.comment-author img {
  border-radius: 50%;
  margin-right: 7px;
}
.comment-author cite {
  margin-right: 7px;
}
.comment-author cite a {
  color: #12a641;
}
.comment-author cite a:hover {
  text-decoration: underline;
}
.comment-meta a {
  color: #757575;
  font-size: 12px;
}
.comment-meta a:hover {
  text-decoration: underline;
}

h3.comment-reply-title {
  font-size: 16px;
}
li.comment {
  border-left: 2px solid #12a641;
  padding: 7px;
  margin-bottom: 10px;
}
a.comment-reply-link {
  font-size: 14px;
  color: #12a641;
}
a.comment-reply-link:hover {
  text-decoration: underline;
}
.logged-in-as a {
  color: #12a641; 
}
.logged-in-as a:hover {
  text-decoration: underline;
}
.Form-login {
  display: flex;
  justify-content: flex-start;
}
.Form-login p {
  margin-right: 10px;
}

.Link-register {
  color: #12a641 !important;
  text-decoration: none;
}
.Link-register:hover {
  text-decoration: underline;
}

.Search {
  margin-right: 20px; 
}

li form input[type="search"] {
  background: rgba(255,255,255,0.9) !important;
  width: 300px !important;
  color: green;
  padding: 0 10px !important;
  height: 42px !important;
   border-radius: 5px !important;
}
li form input[type="search"]:focus {
  background: white !important;
   box-shadow: 0 0 0.6em rgba(68,68,68,0.7) !important;
}
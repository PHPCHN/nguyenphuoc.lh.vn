<style amp-custom>
@font-face {
      font-family: 'Glyph';
      font-style: normal;
      font-weight: 400;
      src: url("{{asset('asset/bootstrap/fonts/glyphicons-halflings-regular.ttf')}}") format('truetype');
}

body {
  font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
}

.wrapper {
  margin: auto;
  max-width: 768px;
}

.unknown-size img {
  object-fit: contain;
}

.hidden-all, .hidden-all p, .hidden-all amp-img {
  visibility: hidden;
  width: 0;
  height: 0;
  margin: 0;
  padding: 0;
}

.row {
  position: relative;
  clear: both;
}

.col-1 {
  width: 8.3333%;
}

.col-2 {
  width: 16.6666%;
}

.col-3 {
  width: 25%;
}

.col-4 {
  width: 33.3333%;
}

.col-5 {
  width: 41.6666%;
}

.col-6 {
  width: 50%;
}

.col-7 {
  width: 58.3333%;
}

.col-8 {
  width: 66.6666%;
}

.col-9 {
  width: 75%;
}

.col-10 {
  width: 83.3333%;
}

.col-11 {
  width: 91.6666%;
}

.col-12 {
  width: 100%;
}

.left {
  float: left;
}

.right {
  float: right;
}

.ex-link {
  position: absolute;
  bottom: 0;
  right: 15px;
}

form.amp-form-submit-success [submit-success],
form.amp-form-submit-error [submit-error]{
  margin-top: 16px;
}

form.amp-form-submit-success [submit-success] {
  color: green;
}

form.amp-form-submit-error [submit-error] {
  color: red;
}

form.amp-form-submit-success.hide-inputs > input {
  display: none
}

.horizontal-display {
  display: flex;
  align-items: center;
}

form > input {
  margin: 0;
}

form label {
  margin: 8px;
}

form {
  margin: 0;
  padding: 0;
}

form select {
  margin-top: 0;
}

.button-primary,
.input-text {
  cursor: pointer;
  border: 1px solid #ccc;
  border-radius: 4px;
  height: 27px;
  box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
}

.button-search {
  margin-left: -28px;
}

.button-search, .button-menu, .glyphicon {
  font-family: 'Glyph';
}

.input-text {
  height: 23px;
}

.menu ul {
  list-style-type: none;
  padding-left: 0;
  margin: -10px;
  margin-bottom: 0;
}

.menu ul li {
  padding-left: 50px;
  padding-right: 15px;
  padding-top: 5px;
  padding-bottom: 5px;
}

.menu ul li.item:hover {
  background-color: #f58121;
}

.menu-header {
  padding: 5px;
  background-color: #0065b2;
  height: 27px;
}

#sidebar a {
  color: #fff;
  text-decoration: none;
}

#sidebar ul {
  background-color: #0065b2;
}

.menu ul amp-img {
  position: absolute;
  left: 15px;
}

.project, .new .item {
  display: table;
  border-bottom: 1px solid #ccc;
}

.project .name {
  font-weight: bold;
  color: #0065b2;
  text-align: justify;
  margin: 10px 5px;
}

.project a, .new a, .product-seen a {
  text-decoration: none;
}

.project a:hover .name, .more-pj a:hover, .new a:hover .title {
  color: #f58121;
}

.project .img-pj, .new .img {
  padding-left: 5px;
  padding-right: 10px;
}

.new .title, .product-seen .code, .product-item .code {
  font-weight: bold;
  color: #0065b2;
}

.product-seen .price, .product-item .price {
  font-weight: bold;
  color: #f00;
}

.project .description, .new .detail {
  text-align: justify;
  padding-left: 5px;
  padding-right: 10px;
}

.project .date, .more-pj, .new .date{
  text-align: right;
  color: #f58121;
  padding-right: 10px;
}

.product-seen .item{
  display: table;
  border: 1px solid #ccc;
  width: 308px;
}

.product-seen .img {
  width: 150px;
}

.product-box {
  padding: 5px;
}

.product-item {
  width: 153px;
  border: 1px solid #ccc;
}

.product-item .cont {
  position: relative;
  height: 80px;
}

.product-item .cont-abs {
  position: absolute;
  bottom: 0;
  left: 0;
  padding: 5px;
}

.product-item .exp {
  text-align: center;
}

.product-item .cont p {
  margin-bottom: 2px;
  margin-top: 2px;
}

.new .date {
  padding-right: 0;
}

.more-pj {
  margin: 10px 0;
}

.project.top-pj {
  display: block;
  position: relative;
}

.project.top-pj .img-pj {
  padding-right: 5px;
}

.project.top-pj .detail {
  position: absolute;
  right: 0;
  bottom: 5px;
  margin-right: 5px;
  width: 90%;
  background: linear-gradient(to right, rgba(204,204,204,0), rgba(204,204,204,1), rgba(204,204,204,1));
}

.project.top-pj .detail .name{
  text-align: right;
  font-size: 12px;
}

.product h6, .news h6, .about .h6 {
  color: #0065b2;
  font-size: 16px;
  padding: 5px;
  margin: 0;
}

.new .more {
  text-align: right;
  padding: 10px;
}

.new .more a {
  text-decoration: none;
  color: #0065b2;
}

.new .more a:hover {
  color: #f58121;
}

.prov .item {
  padding-left: 10px;
}

.prov .prov-cities {
  padding-left: 15px;
}

.prov a {
  text-decoration: none;
}

.prov .h6 {
  font-size: 14px;
  font-weight: bold;
  color: #f58121;
}

.prov .h7 {
  color: #0065b2;
}

.about .h6 {
  font-weight: bold;
}

.ads-news .ads-h6 {
  background-color: #0065b2;
}

.ads-news .ads-h6 h6 {
  padding-left: 34px;
  color: #ff0;
}

.ads-news .ads-mark {
  position: absolute;
  left: 0;
  top: 0;
}

.extra-title {
  margin: 0 0 1px 0;
  padding: 5px 10px 0 10px;
  font-size: 16px;
  font-weight: bold;
  color: #fff;
  background-color: #f58121;
  cursor: pointer;
}

#sidebar {
  width: 216px;
  padding: 10px;
  background-color: #f58121;
}

.about li, .about li a {
  color: #f58121;
}

.about li a {
  text-decoration: none;
}

.about li a:hover {
  text-decoration: underline;
}

.about-b {
  border: 5px solid #e2ddda;
  text-align: center;
}

.about-b .bkard {
  border-right: 5px solid #e2ddda;
}

.about-b amp-img {
  padding-right: 5px;
}

.footer p, .footer h6 {
  text-align: center;
  color: #0065b2;
}

.footer .h6 {
  font-size: 16px;
  font-weight: bold;
}

.footer p {
  font-size: 14px;
}

.footer {
  padding: 5px 15px;
  background-color: #e2ddda;
}

.extra-fixed-1 {
  position: fixed;
  top: 120px;
  left: 5px;
  z-index: 10;
}

.extra-fixed-1 .item .icon {
  cursor: pointer;
}

.extra-fixed-2 {
  position: fixed;
  top: auto;
  bottom: 5px;
  right: 5px;
}

.extra-fixed-2 .item {
  position: relative;
}

.extra-fixed-2 .item .icon {
  width: 50px;
  height: 50px;
  position: absolute;
  bottom: 0;
  left: 0;
}

.extra-fixed-2 .item .content {
  height: 42px;
  padding: 6px 13px 0px 55px;
  font-size: 15px;
  font-weight: bold;
  background-color: #eee;
  border: 1px solid #f58121;
  color: #00f;
  border-radius: 25px;
}

.extra-fixed-2 .item .content p {
  margin: 0px;
}

.extra-fixed-3 {
  position: fixed;
  left: 5px;
  bottom: 0px;
}

.events {
  position: fixed;
  right: 5px;
  bottom: 55px;
  z-index: 20;
}

</style>

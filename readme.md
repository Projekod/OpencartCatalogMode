English :
---------

This addon removes "add to cart" button and other functions about cart.

![Screen 1](http://i.imgur.com/tscQuSo.jpg "Screen 1")


![Screen 2](http://i.imgur.com/K5l4CWo.jpg "Screen 2")

See installation instructions below to use this addon:


Dependencies :
-----------
1- vqmod addon for Opencart : [Link](https://code.google.com/p/vqmod/)

Before install catalog addon, you have install vqmod addon. Installation instructions about vqmod is at that [link](https://code.google.com/p/vqmod/)

Installation :
-----------
1- Upload *extPjkd* folder to your Opencart main directory

2- Open your OpenCart's index php

Add this line
<pre>
include 'extPjkd/loader.php';
</pre>

above this line.
<pre>
// Router

if (isset($request->get['route'])) {
</pre>

3- Copy *extPjkd/vqmod/catalogmode.xml* to *vqmod/xml/*

4- Installation finished and catalog mode activated. There is need to any settings at admin panel. Just now, there will be no add to cart button and other cart funtions.



Türkçe :
---------

*Ne işe yarar :*

Opencart için katalog modu eklentisi, Sepete ekle butonu ile sepet fonksiyonlarını kapatır.

![Screen 1](http://i.imgur.com/tscQuSo.jpg "Screen 1")


![Screen 2](http://i.imgur.com/K5l4CWo.jpg "Screen 2")

Admin panelinden hiç bir ayar yapmanıza gerek yoktur, aşağıdaki kurulum yönergelerini izleyerek aktif edebilirsiniz.

İhtiyaçlar :
-----------
1- opencart için vqmod eklentisi : [Link](https://code.google.com/p/vqmod/)

Bu eklentiyi indirip kurmanız gerekiyor, nasıl indirilip kurulacağı sayfasında mevcut.


Kurulum :
-----------
1- İndirdiğiniz dosya içerisinde bulunan *extPjkd* dizinini opencart yüklü ana dizine yüklüyoruz.

2- Opencart anadizini içerisinde bulunan index.php dosyasını açıp

<pre>
// Router

if (isset($request->get['route'])) {
</pre>

satırının hemen üstüne

<pre>
include 'extPjkd/loader.php';
</pre>

satırını ekliyoruz.

3- *extPjkd* dizini altında bulunan *vqmod* dizini içerisindeki  catalogmode.xml dosyasını ana dizinde bulunan vqmod klasörü altındaki xml klasörü içerisine kopyalıyoruz.

4- Kurulum işlemi tamamlandı, artık katalog modu aktif edilmiş durumda, herhangi bir sayfayı açtığınızda sepete ekle butonu ile sepet butonları saklanmış olacak.


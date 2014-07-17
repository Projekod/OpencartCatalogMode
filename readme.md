Türkçe :
---------

*Ne işe yarar :*

Opencart için katalog modu eklentisi, Sepete ekle butonu ile sepet fonksiyonlarını kapatır.

![Screen 1](http://i.imgur.com/tscQuSo.jpg "Screen 1")


![Screen 2](http://i.imgur.com/K5l4CWo.jpg "Screen 2")

admin panelinden hiç bir ayar yapmanıza gerek yoktur, aşağıdaki kurulum yönergelerini izleyerek aktif edebilirsiniz.


İhtiyaçlar :
-----------
1- opencart için vqmod eklentisi : [Link](https://code.google.com/p/vqmod/)


Kurulum :
-----------
1- İndirdiğiniz dosya içerisinde bulunan *extPjkd* dizinini opencart yüklü ana dizine yüklüyoruz.

2- Opencart anadizini içerisinde bulunan index.php dosyasını açıp

<code>
// Router
if (isset($request->get['route'])) {
</code>

satırının hemen üstüne

<code>
include 'extPjkd/loader.php';
</code>

satırını ekliyoruz.

3- *extPjkd* dizini altında bulunan *vqmod* dizini içerisindeki  catalogmode.xml dosyasını ana dizinde bulunan vqmod klasörü altındaki xml klasörü içerisine kopyalıyoruz.

4- Bitti
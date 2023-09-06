TABLOLAR

ÜrünID (PK, Otomatik Artan)
Ürünİsmi
StokMiktarı
Fiyat
OluşturmaTarihi
GüncellemeTarihi
Müşteriler Tablosu:

MüşteriID (PK, Otomatik Artan)
Ad
Soyad
Email
Sifre (şifre hash'i olarak saklanmalı)
OluşturmaTarihi
GüncellemeTarihi
Siparişler Tablosu:

SiparisID (PK, Otomatik Artan)
MüşteriID (FK: Müşteriler Tablosu)
SiparisDurumu (beklemede, tamamlandı, iptal edildi, vb.)
OluşturmaTarihi
GüncellemeTarihi
Sipariş Ürünleri Tablosu:

SiparisUrunID (PK, Otomatik Artan)
SiparisID (FK: Siparişler Tablosu)
UrunID (FK: Ürünler Tablosu)
Miktar
Bu yapı, daha gelişmiş bir e-ticaret veya stok yönetimi sistemi için temel bir altyapı sağlar. İşlevsellik hakkında daha fazla detay:


YAPILACAKLAR
Kullanıcılar ürünleri görüntüleyebilir, sepete ekleyebilir ve sipariş verebilir.
Ürün stok miktarları güncellenebilir.
Siparişler kaydedilir, sipariş durumları yönetilir (beklemede, tamamlandı, iptal edildi).
Siparişler ve ürünler arasındaki ilişki tutulur.
Müşteri bilgileri güvenli bir şekilde saklanır.
Yönetici (admin) kullanıcısı, ürünleri yönetebilir, siparişleri görüntüleyebilir ve durumlarını güncelleyebilir.
Temel raporlama, stok durumu raporu gibi raporlar oluşturulabilir.

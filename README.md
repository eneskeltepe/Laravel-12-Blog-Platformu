## Laravel Blog Platformu

Laravel tabanlı, çok basit bir blog platformunun ilk sürüm iskeleti. Post, Kategori, Etiket ve Yorum tablolarıyla temel içerik yapısı hazır; Home, About, Archive ve Business sayfaları için controller ve blade şablonları oluşturulmuştur. Proje geliştikçe bu dosya genişletilecektir.

### Neler var
- Modeller: Post, Category, Tag, Comment, User
- Migrasyonlar: posts, categories, tags, post_tag (pivot), comments
- Controller’lar: HomeController, AboutController, ArchiveController, BusinessController (+ Admin klasörü iskeleti)
- Görünümler: `resources/views/pages/{home,about,archive,business}.blade.php`
- Rotalar: `/`, `/about`, `/archive`, `/business`

### Kurulum
Gereksinimler: PHP, Composer, Node.js/NPM, bir veritabanı (MySQL), WAMP/XAMPP veya benzeri.

1) Bağımlılıklar
- Composer: `composer install`
- NPM (Laravel Mix kullanımı): `npm install` ve geliştirme için `npm run dev`

2) Ortam dosyası ve anahtar
- `.env.example` dosyasını `.env` olarak kopyalayın ve veritabanı ayarlarınızı girin.
- Uygulama anahtarı: `php artisan key:generate`

3) Veritabanı
- Migrasyonlar ve tohumlama: `php artisan migrate --seed`

4) Çalıştırma
- PHP yerel sunucu: `php artisan serve`
	veya WAMP sanal host üzerinden erişin.

### Notlar ve Yol Haritası
- Pivot tablo migrasyonunda tablo adı `post_create` olarak görünüyor; `post_tag` olacak şekilde düzenlenmesi planlanıyor.
- Modellerde ilişkiler (belongsTo, hasMany, belongsToMany) henüz tanımlı değil; eklenecek.
- Admin modülü için temel iskelet mevcut; yetkilendirme/CRUD ekranları eklenecek.

### Lisans
MIT

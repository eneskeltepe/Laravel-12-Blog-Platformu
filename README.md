## Laravel Blog Platformu

Laravel tabanlı, çok basit bir blog platformunun ilk sürüm iskeleti. Post, Kategori, Etiket ve Yorum tablolarıyla temel içerik yapısı hazır; Home, About, Archive ve Business sayfaları için controller ve blade şablonları oluşturulmuştur. Proje geliştikçe bu dosya genişletilecektir.

### Neler var
- Modeller: Post, Category, Tag, Comment, User
- Migrasyonlar: posts, categories, tags, post_tag (pivot), comments
- Controller’lar: HomeController, AboutController, ArchiveController, BusinessController, Admin/DashboardController
- Görünümler: `resources/views/pages/{home,about,archive,business}.blade.php` ve Admin için `resources/views/admin/{layouts,template,pages}`
- Rotalar: `/`, `/about`, `/archive`, `/business` ve Admin için `/admin` (name: `admin.dashboard.index`)

### Admin Modülü (yeni)
- Rota grubu: `Route::prefix('admin')->name('admin.')->group(...)`
- Dashboard: `Admin\DashboardController@index` → view: `admin.pages.dashboard`
- Layout: `resources/views/admin/layouts/main.blade.php` (header, topbar, sidebar, footer include edilir)
- Template parçaları: `resources/views/admin/template/{header,topbar,sidebar,footer}.blade.php`
- Statik dosyalar: `public/assetsAdmin/**` (Blade içinde `asset('assetsAdmin/...')` ile kullanılır)

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

Admin paneli: `http://localhost:8000/admin` (veya sanal host adresiniz `/admin`).

### Notlar ve Yol Haritası
- Pivot tablo migrasyonunda tablo adı `post_create` olarak görünüyor; `post_tag` olacak şekilde düzenlenmesi planlanıyor.
- Modellerde ilişkiler (belongsTo, hasMany, belongsToMany) henüz tanımlı değil; eklenecek.
- Admin modülü iskeleti eklendi; yetkilendirme ve içerik CRUD ekranları eklenecek.

### Lisans
MIT

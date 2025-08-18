## Laravel Blog Platformu

Laravel tabanlı, çok basit bir blog platformunun ilk sürüm iskeleti. Post, Kategori, Etiket ve Yorum tablolarıyla temel içerik yapısı hazır; Home, About, Archive ve Business sayfaları için controller ve blade şablonları oluşturulmuştur. Proje geliştikçe bu dosya genişletilecektir.

### Neler var
- Modeller: Post, Category, Tag, Comment, User, Role, Permission
- Migrasyonlar: posts, categories, tags, post_tag (pivot), comments, roles, permissions, users (role_id eklemesi)
- Controller’lar: HomeController, AboutController, ArchiveController, BusinessController, Admin/DashboardController
- Görünümler: `resources/views/pages/{home,about,archive,business}.blade.php` ve Admin için `resources/views/admin/{layouts,template,pages}`
- Rotalar: `/`, `/about`, `/archive`, `/business` ve Admin için `/admin` (name: `admin.dashboard.index`)

### Admin Kimlik Doğrulama
- Giriş sayfası: `GET /admin/login` → `Admin\LoginController@index` (name: `login`)
- Giriş işlemi: `POST /admin/login` → `Admin\LoginController@login` (name: `admin.login.post`)
- Çıkış: `GET /admin/logout` → `Admin\LoginController@logout` (name: `admin.logout`)
- Admin rota grubu `Route::prefix('admin')->name('admin.')->middleware('auth')` ile korunuyor.
- Görünüm: `resources/views/admin/pages/login.blade.php` (statik şablon, `public/assetsAdmin/**` kullanır)
- "Beni Hatırla" desteği: login formunda `remember` checkbox; sunucuda `Auth::attempt($credentials, $remember)` kullanılır.

### Admin Modülü
- Rota grubu: `Route::prefix('admin')->name('admin.')->group(...)`
- Dashboard: `Admin\DashboardController@index` → view: `admin.pages.dashboard`
- Layout: `resources/views/admin/layouts/main.blade.php` (header, topbar, sidebar, footer include edilir)
- Template parçaları: `resources/views/admin/template/{header,topbar,sidebar,footer}.blade.php`
- Statik dosyalar: `public/assetsAdmin/**` (Blade içinde `asset('assetsAdmin/...')` ile kullanılır)

#### Blog Listesi
- Controller: `Admin\\BlogController@index`
- Rota: `/admin/blog-list` (name: `admin.blog.index`)
- Sayfa: `resources/views/admin/pages/blog-list.blade.php`
- Bileşenler: `resources/views/admin/components/blogList/{blog-list-header,blog-list-main}.blade.php`
- Not: Örnek tablo verileri statik olarak eklenmiştir; ileride Post modeli ile dinamikleştirilebilir.

#### Admin Listesi (yeni)
- Controller: `Admin\\AdminController@index`
- Rota: `/admin/adminList` (name: `admin.adminList`)
- Sayfa: `resources/views/admin/pages/admin.blade.php`
- Bileşenler: `resources/views/admin/components/admin/{admin-header,admin-main}.blade.php`

#### Profil Yönetimi
- Controller: `Admin\\ProfileController` (index, profileUpdate)
- Rotalar: 
  - `GET /admin/profile` (name: `admin.profile`)
  - `POST /admin/profile` (name: `admin.profile.update`)
- Sayfa: `resources/views/admin/pages/profile.blade.php`
- Bileşenler: `resources/views/admin/components/profile/{main-header,main-content}.blade.php`
- Migration: `2025_08_17_074326_add_profile_image_to_users_table.php` (profile_image alanı eklendi)
- Özellikler: Kullanıcı adı, e-posta, şifre güncelleme; profil resmi yükleme (`public/profile_images/`)
- Not: Profil güncelleme sonrası otomatik çıkış yapılır ve yeniden giriş gerekir.

#### Rol ve Yetki Sistemi (yeni)
- Modeller: `App\\Models\\admin\\Role`, `App\\Models\\admin\\Permission`
- Migrasyonlar:
  - `create_roles_table`
  - `create_permissions_table` (permissions.role_id → roles.id, cascade delete)
  - `add_role_id_to_users_table` (nullable foreign key, on delete set null)
- İlişkiler:
  - `Role::permissions()` → `hasMany(Permission::class)`
  - `Permission::role()` → `belongsTo(Role::class)`
  - `User::role()` → `belongsTo(Role::class)` ve `users.role_id` alanı eklendi

### Uyum ve Varsayılanlar
- MySQL/MariaDB uyumluluğu için `AppServiceProvider::boot()` içinde `Schema::defaultStringLength(191)` ayarı yapılmıştır.
- Profil resimleri `public/profile_images/` dizininde saklanır ve web erişimi için bu dizin gereklidir.

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
- Pivot tablo migrasyon adı `post_tag` olarak düzeltilmiştir.
- Modellerde ilişkiler (belongsTo, hasMany, belongsToMany) henüz tanımlı değil; eklenecek.
- Admin modülü iskeleti eklendi; yetkilendirme ve içerik CRUD ekranları eklenecek.
- Profil sistemi eklendi; kullanıcı yönetimi ve dosya yükleme işlevselliği aktif.
- RBAC (Role-Based Access Control) için temel Role/Permission yapısı eklendi; yetkilendirme kuralları ileride genişletilecek.

### Lisans
MIT

# Ürün Açıklama Üretici

Ürün adı ve özelliklerini girince, e-ticaret pazaryerlerinde kullanılabilecek bir ürün açıklaması üreten Laravel uygulaması. Açıklamalar Anthropic Claude API ile oluşturulur.

## Özellikler
- Ürün adı ve özelliklerinden Türkçe satış açıklaması üretme
- Giriş paragrafı ve madde işaretli özellik listesi
- Form doğrulama (boş alan ve uzunluk kontrolü)
- Karakter sayacı, yüklenirken buton kilidi ve sonucu kopyalama düğmesi
- Açık ve koyu tema desteği, mobil uyumlu arayüz
- API hatalarında kullanıcıya sade mesaj, detaylı hata kaydı log dosyasında

## Kullanılan Teknolojiler
- PHP / Laravel 12
- Tailwind CSS ve Vite
- Blade, JavaScript
- Anthropic Claude API (Haiku 4.5)

## Proje Yapısı
- `app/Http/Controllers/DescriptionController.php`: İstekleri karşılar
- `app/Http/Requests/GenerateDescriptionRequest.php`: Form doğrulama kuralları
- `app/Services/DescriptionGenerator.php`: API çağrısı ve prompt
- `resources/views/`: Blade şablonları

## Kurulum
1. `git clone https://github.com/hb1253040-ctrl/urun-aciklama-ai.git`
2. `cd urun-aciklama-ai`
3. `composer install`
4. `npm install`
5. `.env.example` dosyasını `.env` olarak kopyala
6. `php artisan key:generate`
7. `.env` dosyasına kendi API anahtarını ekle:
```
   ANTHROPIC_API_KEY=anahtarin
   ANTHROPIC_MODEL=claude-haiku-4-5-20251001
```
8. İki ayrı terminalde çalıştır:
```
   php artisan serve
   npm run dev
```
9. Tarayıcıda `http://127.0.0.1:8000` adresini aç

API anahtarı console.anthropic.com adresinden alınır. Kullanım ücretlidir.

## Notlar
- API anahtarı `.env` dosyasında tutulur ve repoya eklenmez.
- Üretilen metinler yayınlanmadan önce okunmalı, özellikler kontrol edilmelidir.

## Yapılacaklar
- Toplu ürün girişi (CSV yükleme)
- Pazaryeri API entegrasyonu
- Farklı ton ve uzunluk seçenekleri

## Geliştirici
Hüseyin Bayrak, [GitHub](https://github.com/hb1253040-ctrl)

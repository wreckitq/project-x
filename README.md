# Project X
Most loved place for weekend projects

## *Requirements*
- PHP >= 7.4
- Laravel 7
- DBMS (PostgreSQL / MySQL)

## *Installation*
- *clone this repository*
- *copy* ***.env.example*** *to* **.env**, setup:
  - APP_URL
  - DB_XXX
### *Setup application*
    composer install
    php artisan key:generate
    php artisan storage:link
    php artisan laravolt:link
    php artisan migrate:fresh --seed

## Generating assets
### *NPM user*
    npm install
    npm run watch
### *Yarn user*
    yarn install
    yarn run watch

## *Untrack files from versioning (optional)*
Untuk mempermudah *development*, *exclude* beberapa *file* yang tidak ingin di-*versioning*. Sebagai contoh hasil *generating assets* diatas agar tidak *conflict* dengan yang lain waktu *commit*, jalankan:

    git update-index --skip-worktree public/css/app.css public/js/app.js public/mix-manifest.json

Untuk *revert (undo)* langkah diatas (menambahkan kembali *files* ke versioning), jalankan:

    git update-index --no-skip-worktree public/css/app.css public/js/app.js public/mix-manifest.json

## *How to launch application*?
- `php artisan serve`
- atau gunakan *web server* favorit masing-masing

## *Development*
### *Branch list*
* `master` -> production
* `dev` -> belum ada
* `staging` -> belum ada
* `hotfix` -> belum ada

### *Flow*
* Setiap *nambah* ***feature/enchanchment*** buat ***branch*** dari `master`.
* Kalau sudah selesai `merge request` ke `master`, *assign* ke ***LEAD*** buat deploy.
* Kalau ada *bug* pakai *branch* yang sama, kemudian `merge request` lagi ke `branch master`.
* *Update* kerjaan anggota lain dengan `merge branch master` ke branch yang dikerjakan setiap sebelum ***push***.

### Struktur kode saat ngoding
* `Controller` harus mengandung 7 unsur **pokok** saja (***--resource***), tidak boleh **lebih**!
* 7 unsur pokok yaitu `index, create, store, show, edit, update` dan `destroy`.
* Penamaan khusus untuk `view` pake huruf kecil dan strip, contohnya `mission-user`.
* Yang lainnya penamaannya besar kecil *a.k.a* ***camelCase***.
* Penamaan `model` dan `controller` harus bahasa inggris ya, soalnya biar *enak* buat bikin penamaan di ORM.

### *Tips from anyone to everyone*
#### Install `phpcs` dan `phpcbf`, kalau berat cukup lakukan perintah dibawah ini di `cmd` atau `terminal` favoritmu
    composer phpcs
    composer phpcbf
#### Gunakan *text editor* favoritmu kemudian optimasi, atau gunakan PHPStorm dan pastikan ***legal***, ya!

## *Knowing issues*
- *Wanna add something?*
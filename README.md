# Project X

Most loved place for weekend projects.

## _Requirements_

- PHP >= 7.4
- Laravel 7
- DBMS (PostgreSQL / MySQL)

## _Installation_

- _clone this repository_
- _copy_ **_.env.example_** _to_ **.env**, setup:
- APP_URL
- DB_XXX

### _Setup application_

```bash
composer install
php artisan key:generate
php artisan storage:link
php artisan laravolt:link
php artisan migrate:fresh --seed
```

## Generating assets

### _NPM user_

```bash
npm install
npm run watch
```

### _Yarn user_

    yarn install
    yarn run watch

## _Untrack files from versioning (optional)_

Untuk mempermudah _development_, _exclude_ beberapa _file_ yang tidak ingin di-_versioning_. Sebagai contoh hasil _generating assets_ diatas agar tidak _conflict_ dengan yang lain waktu _commit_, jalankan:

```bash
git update-index --skip-worktree public/css/app.css public/js/app.js public/mix-manifest.json
```

Untuk _revert (undo)_ langkah diatas (menambahkan kembali _files_ ke versioning), jalankan:

```bash
git update-index --no-skip-worktree public/css/app.css public/js/app.js public/mix-manifest.json
```

## _How to launch application_?

- ```php artisan serve```
- atau gunakan _web server_ favorit masing-masing

## _Development_

### _Branch list_

- `master` -> production
- `dev` -> belum ada
- `staging` -> belum ada
- `hotfix` -> belum ada

### _Flow_

- Setiap _nambah_ **_feature/enchanchment_** buat **_branch_** dari `master`.
- Kalau sudah selesai `merge request` ke `master`, _assign_ ke **_LEAD_** buat deploy.
- Kalau ada _bug_ pakai _branch_ yang sama, kemudian `merge request` lagi ke `branch master`.
- _Update_ kerjaan anggota lain dengan `merge branch master` ke branch yang dikerjakan setiap sebelum **_push_**.

### Struktur kode saat _coding_

- `Controller` harus mengandung ***7 unsur pokok*** saja (**_--resource_**), tidak boleh **lebih**!
- 7 unsur pokok yaitu `index, create, store, show, edit, update` dan `destroy`.
- Kalo pakai *controller* dengan satu *function* jangan lupa menggunakan *__invoke*
- Penamaan khusus untuk `view` pake huruf kecil dan strip, contohnya `mission-user`.
- Yang lainnya penamaannya besar kecil _a.k.a_ **_camelCase_**.
- Penamaan `model` dan `controller` harus bahasa inggris ya, soalnya biar _enak_ buat bikin penamaan di ORM.

### _Tips from anyone to everyone_

#### Pastikan *code*-mu memenuhi _standart_ dan _readable buat yang lain ya, bisa gunakan perintah dibawah ini:

```bash
php artisan insights
```

#### Gunakan PHPStorm untuk mempermudah _development_ atau bisa juga _text editor_ yang lain sesuai selera!

## _Knowing issues_

- _Wanna add something?_

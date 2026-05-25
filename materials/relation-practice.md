# Praktikum Laravel — Relasi Post & Category

## Tujuan

Membuat relasi One to Many antara:

* Category memiliki banyak Post
* Post memiliki satu Category

---

# Tugas Praktikum

Lanjutkan project CRUD Post sebelumnya, kemudian tambahkan fitur Category.

---

# Ketentuan

## 1. Buat Table Categories

Field:

* id
* name
* timestamps

Command:

```bash
php artisan make:model Category -m
```

---

## 2. Tambahkan Foreign Key pada Posts

Tambahkan:

```php
$table->foreignId('category_id')->constrained()->onDelete('cascade');
```

---

## 3. Jalankan Migration

```bash
php artisan migrate:fresh
```

---

# Relasi Model

## Category.php

```php
public function posts()
{
    return $this->hasMany(Post::class);
}
```

---

## Post.php

```php
public function category()
{
    return $this->belongsTo(Category::class);
}
```

---

# Form Create Post

Tambahkan dropdown category:

```php
<select name="category_id">

@foreach($categories as $category)

<option value="{{ $category->id }}">
    {{ $category->name }}
</option>

@endforeach

</select>
```

---

# Controller

## Create

```php
$categories = Category::all();

return view('posts.create', compact('categories'));
```

---

## Store

```php
Post::create([
    'category_id' => $request->category_id,
    'title' => $request->title,
    'content' => $request->content,
]);
```

---

# Tampilkan Category di Table Post

```php
{{ $post->category->name }}
```

---

# Output Minimal

Mahasiswa harus berhasil:

* membuat category,
* memilih category saat membuat post,
* menampilkan nama category pada data post.

---

# Tugas Analisis

Jawab:

1. Apa fungsi relasi database?
2. Apa perbedaan `hasMany()` dan `belongsTo()`?
3. Apa fungsi foreign key?
4. Mengapa post membutuhkan `category_id`?

---

# Pengumpulan
* Kumpulkan laporan praktikum dalam bentuk PDF berisi: Screenshot hasil aplikasi serta penjelasannya.

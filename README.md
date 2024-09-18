Bu repo, bir MySQL veritabanı oluşturma ve yönetme için kullanılan PHP PDO fonksiyonlarını içermektedir. Aşağıdaki özelliklere sahip:

- **Veritabanı Oluşturma**: `country_phone_codes` tablosunu oluşturur.
- **Fonksiyonlar**:
  - `country_phone($id, $column, $eksql)`: Belirtilen ID'ye ve ek SQL koşullarına göre veriyi seçer.
  - `delete_country_phone($id)`: Belirtilen ID'ye sahip kaydı siler.
  - `insert_country_phone($code, $country)`: Yeni bir ülke adı ve telefon kodu ekler.
  - `update_country_phone($id, $new_country_name, $new_phone_code)`: Belirtilen ID'ye sahip kaydın ülke adını ve telefon kodunu günceller.

Bu kodlar, güvenli veri yönetimi ve PDO kullanımı ile SQL enjeksiyonlarına karşı korunmayı sağlar. İlgili PHP dosyalarını ve SQL scriptlerini içerir.


This repository contains PHP PDO functions for creating and managing a MySQL database. Features include:

- **Database Creation**: Creates the `country_phone_codes` table.
- **Functions**:
  - `country_phone($id, $column, $eksql)`: Retrieves data based on the specified ID and optional SQL conditions.
  - `delete_country_phone($id)`: Deletes a record with the specified ID.
  - `insert_country_phone($code, $country)`: Inserts a new country name and phone code.
  - `update_country_phone($id, $new_country_name, $new_phone_code)`: Updates the country name and phone code for the specified ID.

These scripts ensure secure data management and protect against SQL injection using PDO.


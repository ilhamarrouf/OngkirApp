# OngkirApp
OngkirApp menyediakan RESTful API (Application Programming Interface) yang dapat Anda pakai untuk membuat berbagai macam aplikasi yang membutuhkan data ongkos kirim. Layanan ini memanfaatkan API dari RajaOngkir.com sehingga data yang diberikan bisa terjamin akurasinya.

## 1. Province
Method "province" digunakan untuk mendapatkan daftar propinsi yang ada di Indonesia.

    GET cekongkir.mlopp.com/api/province

#### Parameters
| Method    | Param       | Wajib   | Type      | Description                          |
|-----------|-------------|---------|-----------|--------------------------------------|
| GET/HEAD  | android-key | Tidak   | String    | Identitas aplikasi Android           |
| GET/HEAD  | ios-key     | Tidak   | String    | Identitas aplikasi IOS               |
| GET       | id          | Tidak   | String    | ID propinsi                          |

#### CURL Examples
```
curl --request GET \
  --url 'http://cekongkir.mlopp.com/api/province?id=12' \
  --header 'accept: application/json'
```

#### Success Response
```
{
    "rajaongkir": {
        "query": {
            "id": "12"
        },
        "status": {
            "code": 200,
            "description": "OK"
        },
        "results": {
            "province_id": "12",
            "province": "Kalimantan Barat"
        }
    }
}
```

## 2. City
Method "city" digunakan untuk mendapatkan daftar kota/kabupaten yang ada di Indonesia.

    GET cekongkir.mlopp.com/api/city

#### Parameters
| Method    | Param       | Wajib   | Type      | Description                          |
|-----------|-------------|---------|-----------|--------------------------------------|
| GET/HEAD  | android-key | Tidak   | String    | Identitas aplikasi Android           |
| GET/HEAD  | ios-key     | Tidak   | String    | Identitas aplikasi IOS               |
| GET       | id          | Tidak   | String    | ID kota/kabupaten                    |
| GET       | province    | Tidak   | String    | ID Provinsi                          |

#### CURL Examples
```
curl --request GET \
  --url 'http://cekongkir.mlopp.com/api/city?id=39&province=5' \
  --header 'accept: application/json'
```

#### Success Response
```
{
    "rajaongkir": {
        "query": {
            "id": "39",
            "province": "5"
        },
        "status": {
            "code": 200,
            "description": "OK"
        },
        "results": {
            "city_id": "39",
            "province_id": "5",
            "province": "DI Yogyakarta",
            "type": "Kabupaten",
            "city_name": "Bantul",
            "postal_code": "55715"
        }
    }
}
```

## 3. Subdistrict
Method "subdistrict" digunakan untuk mendapatkan daftar kecamatan yang ada di Indonesia.

    GET cekongkir.mlopp.com/api/subdistrict

#### Parameters
| Method    | Param       | Wajib   | Type      | Description                          |
|-----------|-------------|---------|-----------|--------------------------------------|
| GET/HEAD  | android-key | Tidak   | String    | Identitas aplikasi Android           |
| GET/HEAD  | ios-key     | Tidak   | String    | Identitas aplikasi IOS               |
| GET       | city        | Ya      | String    | ID kota/kabupaten                    |
| GET       | id          | Tidak   | String    | ID kecamatan                         |

#### CURL Examples
```
curl --request GET \
  --url 'http://cekongkir.mlopp.com/api/subdistrict?city=39' \
  --header 'accept: application/json'
```

#### Success Response
```
{
    "rajaongkir": {
        "query": {
            "city": "39"
        },
        "status": {
            "code": 200,
            "description": "OK"
        },
        "results": [
            {
                "subdistrict_id": "537",
                "province_id": "5",
                "province": "DI Yogyakarta",
                "city_id": "39",
                "city": "Bantul",
                "type": "Kabupaten",
                "subdistrict_name": "Bambang Lipuro"
            },
            {
                "subdistrict_id": "538",
                "province_id": "5",
                "province": "DI Yogyakarta",
                "city_id": "39",
                "city": "Bantul",
                "type": "Kabupaten",
                "subdistrict_name": "Banguntapan"
            },
            {
                "subdistrict_id": "539",
                "province_id": "5",
                "province": "DI Yogyakarta",
                "city_id": "39",
                "city": "Bantul",
                "type": "Kabupaten",
                "subdistrict_name": "Bantul"
            },
            {
                "subdistrict_id": "540",
                "province_id": "5",
                "province": "DI Yogyakarta",
                "city_id": "39",
                "city": "Bantul",
                "type": "Kabupaten",
                "subdistrict_name": "Dlingo"
            },
            {
                "subdistrict_id": "541",
                "province_id": "5",
                "province": "DI Yogyakarta",
                "city_id": "39",
                "city": "Bantul",
                "type": "Kabupaten",
                "subdistrict_name": "Imogiri"
            },
            {
                "subdistrict_id": "542",
                "province_id": "5",
                "province": "DI Yogyakarta",
                "city_id": "39",
                "city": "Bantul",
                "type": "Kabupaten",
                "subdistrict_name": "Jetis"
            },
            {
                "subdistrict_id": "543",
                "province_id": "5",
                "province": "DI Yogyakarta",
                "city_id": "39",
                "city": "Bantul",
                "type": "Kabupaten",
                "subdistrict_name": "Kasihan"
            },
            {
                "subdistrict_id": "544",
                "province_id": "5",
                "province": "DI Yogyakarta",
                "city_id": "39",
                "city": "Bantul",
                "type": "Kabupaten",
                "subdistrict_name": "Kretek"
            },
            {
                "subdistrict_id": "545",
                "province_id": "5",
                "province": "DI Yogyakarta",
                "city_id": "39",
                "city": "Bantul",
                "type": "Kabupaten",
                "subdistrict_name": "Pajangan"
            },
            {
                "subdistrict_id": "546",
                "province_id": "5",
                "province": "DI Yogyakarta",
                "city_id": "39",
                "city": "Bantul",
                "type": "Kabupaten",
                "subdistrict_name": "Pandak"
            },
            {
                "subdistrict_id": "547",
                "province_id": "5",
                "province": "DI Yogyakarta",
                "city_id": "39",
                "city": "Bantul",
                "type": "Kabupaten",
                "subdistrict_name": "Piyungan"
            },
            {
                "subdistrict_id": "548",
                "province_id": "5",
                "province": "DI Yogyakarta",
                "city_id": "39",
                "city": "Bantul",
                "type": "Kabupaten",
                "subdistrict_name": "Pleret"
            },
            {
                "subdistrict_id": "549",
                "province_id": "5",
                "province": "DI Yogyakarta",
                "city_id": "39",
                "city": "Bantul",
                "type": "Kabupaten",
                "subdistrict_name": "Pundong"
            },
            {
                "subdistrict_id": "550",
                "province_id": "5",
                "province": "DI Yogyakarta",
                "city_id": "39",
                "city": "Bantul",
                "type": "Kabupaten",
                "subdistrict_name": "Sanden"
            },
            {
                "subdistrict_id": "551",
                "province_id": "5",
                "province": "DI Yogyakarta",
                "city_id": "39",
                "city": "Bantul",
                "type": "Kabupaten",
                "subdistrict_name": "Sedayu"
            },
            {
                "subdistrict_id": "552",
                "province_id": "5",
                "province": "DI Yogyakarta",
                "city_id": "39",
                "city": "Bantul",
                "type": "Kabupaten",
                "subdistrict_name": "Sewon"
            },
            {
                "subdistrict_id": "553",
                "province_id": "5",
                "province": "DI Yogyakarta",
                "city_id": "39",
                "city": "Bantul",
                "type": "Kabupaten",
                "subdistrict_name": "Srandakan"
            }
        ]
    }
}
```

## 4. Cost
Method “cost” digunakan untuk mengetahui tarif pengiriman (ongkos kirim) dari dan ke kecamatan tujuan tertentu dengan berat tertentu pula.

    POST cekongkir.mlopp.com/api/cost

#### Parameters
| Method    | Param       | Wajib   | Type      | Description                                                 |
|-----------|-------------|---------|-----------|-------------------------------------------------------------|
| POST/HEAD | android-key | Tidak   | String    | Identitas aplikasi Android                                  |
| POST/HEAD | ios-key     | Tidak   | String    | Identitas aplikasi IOS                                      |
| POST      | origin      | Ya      | String    | ID kota/kabupaten atau kecamatan asal                       |
| POST      | originType* | Ya      | String    | Tipe origin: 'city' atau 'subdistrict'                      |
| POST      | destination | Ya      | String    | ID kota/kabupaten atau kecamatan tujuan                     |
| POST      | destinationType** | Ya      | String    | Tipe destination: 'city' atau 'subdistrict'           |
| POST      | weight      | Ya      | String    | Berat kiriman dalam gram                                    |
| POST      | courier     | Ya      | String    | Kode kurir: jne, pos, tiki, rpx, esl, pcp, pandu, wahana, sicepat, jnt, pahala, cahaya, sap, jet, indah, dse, slis, first, ncs, star. |
| POST      | length      | Tidak   | Number    | Dimensi panjang paket kiriman (cm)                          |
| POST      | width       | Tidak   | Number    | Dimensi lebar paket kiriman (cm)                            |
| POST      | height      | Tidak   | Number    | Dimensi tinggi paket kiriman (cm)                           |
| POST      | diameter    | Tidak   | Number    | Dimensi diameter paket kiriman (cm)                         |


#### CURL Examples
```
curl --request POST \
  --url http://cekongkir.mlopp.com/api/cost \
  --header 'accept: application/json' \
  --header 'content-type: application/x-www-form-urlencoded' \
  --data 'origin=501&originType=city&destination=574&destinationType=subdistrict&weight=1700&courier=jne'
```

#### Success Response
```
{
    "rajaongkir": {
        "query": {
            "origin": "501",
            "originType": "city",
            "destination": "574",
            "destinationType": "subdistrict",
            "weight": 1700,
            "courier": "jne:tiki"
        },
        "status": {
            "code": 200,
            "description": "OK"
        },
        "origin_details": {
            "city_id": "501",
            "province_id": "5",
            "province": "DI Yogyakarta",
            "type": "Kota",
            "city_name": "Yogyakarta",
            "postal_code": "55222"
        },
        "destination_details": {
            "subdistrict_id": "574",
            "province_id": "10",
            "province": "Jawa Tengah",
            "city_id": "41",
            "city": "Banyumas",
            "type": "Kabupaten",
            "subdistrict_name": "Banyumas"
        },
        "results": [
            {
                "code": "jne",
                "name": "Jalur Nugraha Ekakurir (JNE)",
                "costs": [
                    {
                        "service": "OKE",
                        "description": "Ongkos Kirim Ekonomis",
                        "cost": [
                            {
                                "value": 28000,
                                "etd": "6-7",
                                "note": ""
                            }
                        ]
                    },
                    {
                        "service": "REG",
                        "description": "Layanan Reguler",
                        "cost": [
                            {
                                "value": 32000,
                                "etd": "4-5",
                                "note": ""
                            }
                        ]
                    }
                ]
            },
            {
                "code": "tiki",
                "name": "Citra Van Titipan Kilat (TIKI)",
                "costs": [
                    {
                        "service": "REG",
                        "description": "REGULAR SERVICE",
                        "cost": [
                            {
                                "value": 43250,
                                "etd": "3",
                                "note": ""
                            }
                        ]
                    },
                    {
                        "service": "ECO",
                        "description": "ECONOMY SERVICE",
                        "cost": [
                            {
                                "value": 32500,
                                "etd": "5",
                                "note": ""
                            }
                        ]
                    },
                    {
                        "service": "ONS",
                        "description": "OVER NIGHT SERVICE",
                        "cost": [
                            {
                                "value": 56750,
                                "etd": "2",
                                "note": ""
                            }
                        ]
                    }
                ]
            }
        ]
    }
}
```

## 5. InternationalOrigin
Method "internationalOrigin" digunakan untuk mendapatkan daftar/nama kota yang mendukung pengiriman internasional.

    GET cekongkir.mlopp.com/api/internationalOrigin

#### Parameters
| Method    | Param       | Wajib   | Type      | Description                          |
|-----------|-------------|---------|-----------|--------------------------------------|
| GET/HEAD  | android-key | Tidak   | String    | Identitas aplikasi Android           |
| GET/HEAD  | ios-key     | Tidak   | String    | Identitas aplikasi IOS               |
| GET       | id          | Tidak   | String    | ID kota/kabupaten                    |
| GET       | province    | Tidak   | String    | ID provinsi                          |

#### CURL Examples
```
curl --request GET \
  --url 'http://cekongkir.mlopp.com/api/internationalOrigin?id=152&province=6' \
  --header 'accept: application/json'
```

#### Success Response
```
{
    "rajaongkir": {
        "query": {
            "id": "152",
            "province": "6"
        },
        "status": {
            "code": 200,
            "description": "OK"
        },
        "results": [
            {
                "city_id": "152",
                "province_id": "6",
                "province": "DKI Jakarta",
                "type": "Kota",
                "city_name": "Jakarta Pusat",
                "postal_code": "10540"
            }
        ]
    }
}
```

## 6. InternationalDestination
Method "internationalDestination" digunakan untuk mendapatkan daftar/nama negara tujuan pengiriman internasional.

    GET cekongkir.mlopp.com/api/internationalDestination

#### Parameters
| Method    | Param       | Wajib   | Type      | Description                          |
|-----------|-------------|---------|-----------|--------------------------------------|
| GET/HEAD  | android-key | Tidak   | String    | Identitas aplikasi Android           |
| GET/HEAD  | ios-key     | Tidak   | String    | Identitas aplikasi IOS               |
| GET       | id          | Tidak   | String    | ID negara                            |

#### CURL Examples
```
curl --request GET \
  --url 'http://cekongkir.mlopp.com/api/internationalDestination?id=108' \
  --header 'accept: application/json'
```

#### Success Response
```
{
    "rajaongkir": {
        "query": {
            "id": "108"
        },
        "status": {
            "code": 200,
            "description": "OK"
        },
        "results": {
            "country_id": "108",
            "country_name": "Malaysia"
        }
    }
}
```

## 7. InternationalCost
Method “internationalCost” digunakan untuk mengetahui tarif pengiriman (ongkos kirim) internasional dari kota-kota di Indonesia ke negara tujuan di seluruh dunia.

    POST cekongkir.mlopp.com/api/internationalCost

#### Parameters
| Method    | Param       | Wajib   | Type      | Description                                                 |
|-----------|-------------|---------|-----------|-------------------------------------------------------------|
| POST/HEAD | android-key | Tidak   | String    | Identitas aplikasi Android                                  |
| POST/HEAD | ios-key     | Tidak   | String    | Identitas aplikasi IOS                                      |
| POST      | origin      | Ya      | String    | ID kota/kabupaten atau kecamatan asal                       |
| POST      | destination | Ya      | String    | ID kota/kabupaten atau kecamatan tujuan                     |
| POST      | weight      | Ya      | String    | Berat kiriman dalam gram                                    |
| POST      | courier     | Ya      | String    | Kode kurir: jne, pos, tiki, rpx, esl, pcp, pandu, wahana, sicepat, jnt, pahala, cahaya, sap, jet, indah, dse, slis, first, ncs, star. |
| POST      | length      | Tidak   | Number    | Dimensi panjang paket kiriman (cm)                          |
| POST      | width       | Tidak   | Number    | Dimensi lebar paket kiriman (cm)                            |
| POST      | height      | Tidak   | Number    | Dimensi tinggi paket kiriman (cm)                           |

#### CURL Examples
```
curl --request POST \
  --url http://cekongkir.mlopp.com/api/internationalCost \
  --header 'accept: application/json' \
  --header 'content-type: application/x-www-form-urlencoded' \
  --data 'origin=152&destination=108&weight=1400&courier=pos'
```

#### Success Response
```
{
    "rajaongkir": {
        "query": {
            "origin": "152",
            "destination": "108",
            "weight": 1400,
            "courier": "tiki"
        },
        "status": {
            "code": 200,
            "description": "OK"
        },
        "origin_details": {
            "city_id": "152",
            "province_id": "6",
            "province": "DKI Jakarta",
            "type": "Kota",
            "city_name": "Jakarta Pusat",
            "postal_code": "10540"
        },
        "destination_details": {
            "country_id": "108",
            "country_name": "Malaysia"
        },
        "results": [
            {
                "code": "tiki",
                "name": "Citra Van Titipan Kilat (TIKI)",
                "costs": [
                    {
                        "service": "Dokumen",
                        "cost": 319920,
                        "currency": "IDR",
                        "etd": ""
                    },
                    {
                        "service": "Paket",
                        "cost": 333250,
                        "currency": "IDR",
                        "etd": ""
                    }
                ]
            }
        ],
        "currency": {
            "value": 13454,
            "last_update": "2017-07-11",
            "source_name": "Bank Sentral Republik Indonesia (BI)",
            "source_link": "http://www.bi.go.id/en/moneter/informasi-kurs/transaksi-bi/Default.aspx"
        }
    }
}
```

## 8. Currency
Method "currency" digunakan untuk mendapatkan informasi nilai tukar rupiah terhadap US dollar.

    GET cekongkir.mlopp.com/api/currency

#### Parameters
| Method    | Param       | Wajib   | Type      | Description                          |
|-----------|-------------|---------|-----------|--------------------------------------|
| GET/HEAD  | android-key | Tidak   | String    | Identitas aplikasi Android           |
| GET/HEAD  | ios-key     | Tidak   | String    | Identitas aplikasi IOS               |

#### CURL Examples
```
curl --request GET \
  --url 'http://cekongkir.mlopp.com/api/currency'
```

#### Success Response
```
{
    "rajaongkir": {
        "status": {
            "code": 200,
            "description": "OK"
        },
        "result": {
            "value": 13435,
            "last_update": "2017-07-12",
            "source_name": "Bank Sentral Republik Indonesia (BI)",
            "source_link": "http://www.bi.go.id/en/moneter/informasi-kurs/transaksi-bi/Default.aspx"
        }
    }
}
```

## 9. Waybill
Method “waybill” untuk digunakan melacak/mengetahui status pengiriman berdasarkan nomor resi.

    POST cekongkir.mlopp.com/api/waybill

#### Parameters
| Method    | Param       | Wajib   | Type      | Description                          |
|-----------|-------------|---------|-----------|--------------------------------------|
| POST/HEAD | android-key | Tidak   | String    | Identitas aplikasi Android           |
| POST/HEAD | ios-key     | Tidak   | String    | Identitas aplikasi IOS               |
| POST      | waybill     | Ya      | String    | Nomor resi JNE                       |
| POST      | courier     | Ya      | String    | Kode kurir: jne, pos, tiki, wahana, jnt, rpx, sap, sicepat, pcp, jet, dse, first |

#### CURL Examples
```
curl --request POST \
  --url http://cekongkir.mlopp.com/api/waybill \
  --header 'accept: application/json' \
  --header 'content-type: application/x-www-form-urlencoded' \
  --data 'waybill=SOCAG00183235715&courier=jne'
```

#### Success Response
```
{
    "rajaongkir": {
        "query": {
            "waybill": "SOCAG00183235715",
            "courier": "jne"
        },
        "status": {
            "code": 200,
            "description": "OK"
        },
        "result": {
            "delivered": true,
            "summary": {
                "courier_code": "jne",
                "courier_name": "Jalur Nugraha Ekakurir (JNE)",
                "waybill_number": "SOCAG00183235715",
                "service_code": "OKE",
                "waybill_date": "2015-03-03",
                "shipper_name": "IRMA F",
                "receiver_name": "RISKA VIVI",
                "origin": "WONOGIRI,KAB.WONOGIRI",
                "destination": "PALEMBANG",
                "status": "DELIVERED"
            },
            "details": {
                "waybill_number": "SOCAG00183235715",
                "waybill_date": "2015-03-03",
                "waybill_time": "13:23",
                "weight": "1",
                "origin": "WONOGIRI,KAB.WONOGIRI",
                "destination": "PALEMBANG",
                "shippper_name": "IRMA F",
                "shipper_address1": "WONOGIRI",
                "shipper_address2": null,
                "shipper_address3": null,
                "shipper_city": "WONOGIRI",
                "receiver_name": "RISKA VIVI",
                "receiver_address1": "PERUMAHAN BUKIT SEJAHTERA",
                "receiver_address2": "AF 05 RT 074/022",
                "receiver_address3": "PALEMBANG",
                "receiver_city": "PALEMBANG"
            },
            "delivery_status": {
                "status": "DELIVERED",
                "pod_receiver": "RISKA",
                "pod_date": "2015-03-05",
                "pod_time": "13:22"
            },
            "manifest": [
                {
                    "manifest_code": "1",
                    "manifest_description": "Manifested",
                    "manifest_date": "2015-03-04",
                    "manifest_time": "03:41",
                    "city_name": "SOLO"
                },
                {
                    "manifest_code": "2",
                    "manifest_description": "On Transit",
                    "manifest_date": "2015-03-04",
                    "manifest_time": "15:44",
                    "city_name": "JAKARTA"
                },
                {
                    "manifest_code": "3",
                    "manifest_description": "Received On Destination",
                    "manifest_date": "2015-03-05",
                    "manifest_time": "08:57",
                    "city_name": "PALEMBANG"
                }
            ]
        }
    }
}
```

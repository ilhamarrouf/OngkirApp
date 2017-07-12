<?php

namespace App\Controllers;

use GuzzleHttp\Exception\BadResponseException as GuzzleException;

class OngkirController extends Controller
{
    /**
     * Method "province" digunakan untuk mendapatkan daftar propinsi yang ada di Indonesia.
     */
    public function province($request, $response)
    {
        try {
            $response = $this->client->request('GET', 'province?' . $request->getUri()->getQuery());
        } catch (GuzzleException $e) {
            $response = $e->getResponse();
        }

        return $response;
    }

    /**
     * Method "city" digunakan untuk mendapatkan daftar kota/kabupaten yang ada di Indonesia.
     */
    public function city($request, $response)
    {
        try {
            $response = $this->client->request('GET', 'city?' . $request->getUri()->getQuery());
        } catch (GuzzleException $e) {
            $response = $e->getResponse();
        }

        return $response;
    }

    /**
     * Method "subdistrict" digunakan untuk mendapatkan daftar kecamatan yang ada di Indonesia.
     */
    public function subdistrict($request, $response)
    {
        try {
            $response = $this->client->request('GET', 'subdistrict?' . $request->getUri()->getQuery());
        } catch (GuzzleException $e) {
            $response = $e->getResponse();
        }

        return $response;
    }

    /**
     * Method “cost” digunakan untuk mengetahui tarif pengiriman (ongkos kirim) dari dan ke kecamatan tujuan tertentu dengan berat tertentu pula.
     */
    public function cost($request, $response)
    {
        try {
            $response = $this->client->request('POST', 'cost', [
                'form_params' => [
                    'origin' => $request->getParam('origin'),
                    'originType' => $request->getParam('originType'),
                    'destination' => $request->getParam('destination'),
                    'destinationType' => $request->getParam('destinationType'),
                    'weight' => $request->getParam('weight'),
                    'courier' => $request->getParam('courier'),
                ],
            ]);
        } catch (GuzzleException $e) {
            $response = $e->getResponse();
        }

        return $response;
    }

    /**
     * Method "internationalOrigin" digunakan untuk mendapatkan daftar/nama kota yang mendukung pengiriman internasional.
     */
    public function internationalOrigin($request, $response)
    {
        try {
            $response = $this->client->request('GET', 'v2/internationalOrigin?' . $request->getUri()->getQuery());
        } catch (GuzzleException $e) {
            $response = $e->getResponse();
        }

        return $response;
    }

    /**
     * Method "internationalDestination" digunakan untuk mendapatkan daftar/nama negara tujuan pengiriman internasional.
     */
    public function internationalDestination($request, $response)
    {
        try {
            $response = $this->client->request('GET', 'v2/internationalDestination?' . $request->getUri()->getQuery());
        } catch (GuzzleException $e) {
            $response = $e->getResponse();
        }

        return $response;
    }

    /**
     * Method “internationalCost” digunakan untuk mengetahui tarif pengiriman (ongkos kirim) internasional dari kota-kota di Indonesia ke negara tujuan di seluruh dunia.
     */
    public function internationalCost($request, $response)
    {
        try {
            $response = $this->client->request('POST', 'internationalCost', [
                'form_params' => [
                    'origin' => $request->getParam('origin'),
                    'destination' => $request->getParam('destination'),
                    'weight' => $request->getParam('weight'),
                    'courier' => $request->getParam('courier'),
                ],
            ]);
        } catch (GuzzleException $e) {
            $response = $e->getResponse();
        }

        return $response;
    }

    /**
     * Method "currency" digunakan untuk mendapatkan informasi nilai tukar rupiah terhadap US dollar.
     */
    public function currency($request, $response)
    {
        try {
            $response = $this->client->request('GET', 'currency');
        } catch (GuzzleException $e) {
            $response = $e->getResponse();
        }

        return $response;
    }

    /**
     * Method “waybill” untuk digunakan melacak/mengetahui status pengiriman berdasarkan nomor resi.
     */
    public function waybill($request, $response)
    {
        try {
            $response = $this->client->request('POST', 'waybill', [
                'form_params' => [
                    'waybill' => $request->getParam('waybill'),
                    'courier' => $request->getParam('courier'),
                ],
            ]);
        } catch (GuzzleException $e) {
            $response = $e->getResponse();
        }

        return $response;
    }
}
<?php

namespace App\Controllers;

use GuzzleHttp\Exception\BadResponseException as GuzzleException;

class OngkirController extends Controller
{
    public function province($request, $response)
    {
        try {
            $response = $this->client->request('GET', 'province?' . $request->getUri()->getQuery());
        } catch (GuzzleException $e) {
            $response = $e->getResponse();
        }

        return $response;
    }

    public function city($request, $response)
    {
        try {
            $response = $this->client->request('GET', 'city?' . $request->getUri()->getQuery());
        } catch (GuzzleException $e) {
            $response = $e->getResponse();
        }

        return $response;
    }

    public function subdistrict($request, $response)
    {
        try {
            $response = $this->client->request('GET', 'subdistrict?' . $request->getUri()->getQuery());
        } catch (GuzzleException $e) {
            $response = $e->getResponse();
        }

        return $response;
    }

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

    public function internationalOrigin($request, $response)
    {
        try {
            $response = $this->client->request('GET', 'v2/internationalOrigin?' . $request->getUri()->getQuery());
        } catch (GuzzleException $e) {
            $response = $e->getResponse();
        }

        return $response;
    }

    public function internationalDestination($request, $response)
    {
        try {
            $response = $this->client->request('GET', 'v2/internationalDestination?' . $request->getUri()->getQuery());
        } catch (GuzzleException $e) {
            $response = $e->getResponse();
        }

        return $response;
    }

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

    public function currency($request, $response)
    {
        try {
            $response = $this->client->request('GET', 'currency');
        } catch (GuzzleException $e) {
            $response = $e->getResponse();
        }

        return $response;
    }

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
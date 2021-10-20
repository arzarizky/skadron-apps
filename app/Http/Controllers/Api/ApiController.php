<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;

class ApiController extends Controller
{
    protected $result = [
        'success' => true,
        'message' => null,
        'data' => null,
        'exceptions' => null
    ];

    protected function paginateResponse(Request $request, $query) {
        //Paginate settings if available
        if ($request->has('limit') && !empty($request->input('limit')) && $request->has('page') && !empty($request->input('page'))) {
            $limit = $request->input('limit', 10);
            $page = $request->input('page', 1);

            Paginator::currentPageResolver(function() use ($page) {
                return $page;
            });
            $data = $query->paginate($limit);

            return $this->listResponse($data);
        }
        else {
            $data = $query->get();

            return $this->successResponse($data);
        }
    }

    /**
     * List json individual response with paginate
     * @param type $data
     * @return type
     */
    protected function listResponse($data) {
        $response = [
            'success' => true,
            'data' => $data->all(),
            'metadata' => [
                'pages' => (int) $data->lastPage(),
                'current_page' => (int) $data->currentPage(),
                'per_page' => (int) $data->perPage(),
                'total' => (int) $data->total(),
            ],
        ];

        return get_json_response($response);
    }

    /**
     * Show json individual response
     * @param type $data
     * @return type
     */
    protected function showResponse($data) {
        $response = [
            'success' => true,
            'data' => $data,
        ];

        return get_json_response($response);
    }

    /**
     * Show json individual response
     * @param type $data
     * @return type
     */
    protected function createdResponse($data, $message = '') {
        $response = [
            'success' => true,
            'data' => $data,
            'message' => $message ? $message : 'New Data Successfully Created'
        ];

        return get_json_response($response);
    }

    /**
     * Not found response
     * @return type
     */
    protected function successResponse($data = null, $message = '') {
        $response = [
            'success' => true,
            'data' => $data,
            'message' => $message
        ];

        return get_json_response($response, 200);
    }

    /**
     * Not found response
     * @return type
     */
    protected function notFoundResponse($message = '', $code = 200) {
        $response = [
            'success' => false,
            'data' => null,
            'message' => $message ? $message : 'Resource Not Found'
        ];

        return get_json_response($response, $code);
    }

    /**
     * Client error response
     * @param type $data
     * @return type
     */
    protected function clientErrorResponse($data = null, $message = '', $code = 422) {
        $response = [
            'success' => false,
            'data' => $data,
            'message' => $message ? $message : 'Unprocessable entity',
        ];

        return get_json_response($response, $code);
    }

    /**
     * Client error response
     * @param type $data
     * @return type
     */
    protected function exceptionResponse($message = '', $exceptions = null, $code = 422) {
        $response = [
            'success' => false,
            'data' => null,
            'message' => $message ? $message : 'Error(s) occured when inserting new data',
            'exceptions' => $exceptions,
        ];

        return get_json_response($response, $code);
    }
}

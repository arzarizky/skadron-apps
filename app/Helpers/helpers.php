<?php

if ( ! function_exists('get_json_response') ) {
    function get_json_response($params = null, $status = 200, array $headers = [], $options = 0) {
        $responses = [
            'status' => $status,
            'success' => isset($params['success']) ? $params['success'] : true,
            'message' => isset($params['message']) ? $params['message'] : null,
            'data' => isset($params['data']) ? $params['data'] : null,
            'exceptions' => isset($params['exceptions']) ? $params['exceptions'] : null
        ];

        if (isset($params['metadata'])) {
            $responses['metadata'] = $params['metadata'];
        }

        return response()->json($responses, $status);
    }
}
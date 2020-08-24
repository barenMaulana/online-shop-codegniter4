<?php

namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class Noauth implements FilterInterface
{
    public function before(RequestInterface $request)
    {
        // Do something here
        if (session()->get('isLogged_in')) {
            return redirect()->to('/admin');
        }
    }

    //--------------------------------------------------------------------

    public function after(RequestInterface $request, ResponseInterface $response)
    {
        // Do something here
    }
}

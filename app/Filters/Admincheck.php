<?php

namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class Admincheck implements FilterInterface
{
    public function before(RequestInterface $request)
    {
        $uri = service('uri');
        if (!session()->get('isLogged_in')) {
            if ($uri->getSegment(1) == 'admin') {
                $segment = '/';
                return redirect()->to($segment);
            } else if ($uri->getSegment(1) == 'product') {
                $segment = '/';
                return redirect()->to($segment);
            }
        } else {
            if ($uri->getSegment(1) == 'auth' && $uri->getSegment(2) != '') {
                $segment = $uri->getSegment(0) . '/admin';

                return redirect()->to($segment);
            }
        }
    }

    //--------------------------------------------------------------------

    public function after(RequestInterface $request, ResponseInterface $response)
    {
        // Do something here
    }
}

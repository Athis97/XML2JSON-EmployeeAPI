<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\VehAvail;
use CodeIgniter\HTTP\ResponseInterface;

class VehAvailController extends BaseController
{
    public function uploadXmlForm()
    {
        return view('upload_xml');
    }

    public function importXml()
    {
        helper(['form', 'url']);

        $xmlFile = $this->request->getFile('xmlfile');

        if ($xmlFile->isValid() && !$xmlFile->hasMoved()) {
            $xmlContent = file_get_contents($xmlFile->getTempName());
            $xml = simplexml_load_string($xmlContent);
            $json = json_encode($xml);

            $vehAvailModel = new VehAvail();
            $vehAvailModel->save(['json_data' => $json]);

            // Flash success message
            $session = session();
            $session->setFlashdata('success', 'XML data has been successfully imported and stored in the database.');

            // Redirect back to the upload page
            return redirect()->to(base_url('veh-avail/upload'));
        } else {
            // Flash error message
            $session = session();
            $session->setFlashdata('error', 'Error in file upload.');

            // Redirect back to the upload page
            return redirect()->to(base_url('veh-avail/upload'));
        }
    }

    public function showData()
    {
        $vehAvailModel = new VehAvail();

        $data = $vehAvailModel->findAll();

        return view('veh_avail_view', ['data' => $data]);
    }
}

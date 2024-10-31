<?php

namespace App\Controllers;

use App\Models\TrackingModel;

class Home extends BaseController
{

    function __construct()
    {
      $this->session = session();
    }


    public function tracking($id) {
      header('Access-Control-Allow-Origin: *');
      $model = model(TrackingModel::class);
      if($id == 'all') {
        $tracking = $model->getTracking();
      } else {
        $tracking = $model->getTrackingBySchool($id);
      }

      return json_encode($tracking);

    }

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SimpleXMLElement;
use App\Models\SubjectChoice;
use App\Models\Student;
class adminController extends Controller
{
    public function export_xml()
    {
        $xml_object =  $this->prepare_xml();
        $xml_object->asXML('student-Report.xml');

        // ActivityLog::log_activity('Exported approved students XML file');
        
            // $ua=$this->getBrowser();
            // $activity = new activityLog;
            // $activity->user_id = Auth::user()->id;
            // $activity->user_type = 'admin';
            // $activity->activity_key = '12';
            // $activity->activity = 'Export XML File';
            // $activity->ip_address = $this->getUserIpAddr();
            // $activity->browser = $ua['name'];
            // $activity->version = $ua['version'] ;
            // $activity->platform = $ua['platform'] ;
            // $activity->user_agent = $ua['userAgent'];
            // $activity->save();
        return response()->download(public_path('student-Report.xml'));
    }

    // Prepare and return an XML file
    public function prepare_xml()
    {
        $xml_str = <<<XML
        <?xml version='1.0' encoding='UTF-8' ?>
        <applications>
            
        </applications>
        XML;

        $xml_object = new SimpleXMLElement($xml_str);

        $applicants =Student::get();

        foreach ($applicants as $applicant) {
            $application = $xml_object->addChild('student');
            $list = ['info','course','attached_file'];
            for ($i=0; $i < 1; $i++) {
                if ($i == 0) {
                    $theInfo = Student::where('id','=',$applicant->id)->first();
                    $info = $application->addChild($list[$i]);
                    $info->addChild('id', $theInfo->id);
                    $info->addChild('first_Name', $theInfo->first_nm);
                    $info->addChild('last_Name', $theInfo->last_nm);
                    $info->addChild('Date_Of_birth', $theInfo->dob);
                    $info->addChild('email', $theInfo->email);
                } elseif ($i == 1) {
                    $course = $application->addChild($list[$i]);
                    // foreach ($studentCourse as $cours ) {
                    //     $xmlCourse = $course->addChild('student_course');
                    //     $xmlCourse->addChild('Course_Name', $service->service_name);
                    //     $xmlCourse->addChild('Price', $service->service_price);
                    //     $xmlCourse->addChild('Status', $cours->status);
                    // }
                }elseif ($i == 2) {
                    $file = $application->addChild($list[$i]);
                    // foreach ($studentCourse as $cours ) {
                    //     $service = service::where('service_id','=',$cours->service_id)->first();
                    //     $tagcourse = $file->addChild(''.$service->service_name.'-'.$list[$i].'');
                       
                    //     foreach ($studentfile as $files ) {
                    //         $xmlFilee = $tagcourse->addChild('file');
                    //         $xmlFilee->addChild('Course_Name', $service->service_name);
                    //         $xmlFilee->addChild('file_Name', $files->file_nm);
                    //         $xmlFilee->addChild('file_Path', $files->file_path);
                    //     }
                    // }
                }
                
            }

        }
        return $xml_object;
    }
}

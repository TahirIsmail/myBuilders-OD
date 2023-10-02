<?php

namespace App\Http\Controllers;

use DB;
use URL;
use Schema;
use Artisan;
use ZipArchive;
use App\Models\Upload;
use Illuminate\Http\Request;
use App\Models\SystemConfiguration;
use Spatie\Permission\Models\Permission;

class UpdateController extends Controller
{
    public function step0(Request $request) {
        if (env('DEMO_MODE') == 'On') {
            flash(translate('This action is disabled in demo mode'))->error();
            return back();
        }
        if ($request->has('update_zip')) {
            if (class_exists('ZipArchive')) {
                // Create update directory.
                $dir = 'updates';
                if (!is_dir($dir))
                    mkdir($dir, 0777, true);

                $path = Upload::findOrFail($request->update_zip)->file_name;

                //Unzip uploaded update file and remove zip file.
                $zip = new ZipArchive;
                $res = $zip->open(base_path('public/' . $path));

                if ($res === true) {
                    $res = $zip->extractTo(base_path());
                    $zip->close();
                } else {
                    flash(translate('Could not open the updates zip file.'))->error();
                    return back();
                }
                return redirect()->route('update.step1');
            } else {
                flash(translate('Please enable ZipArchive extension.'))->error();
            }
        } else {
            return view('update.step0');
        }
    }

    public function step1() {
        if(SystemConfiguration::where('type', 'current_version')->first() != null) {
            if(SystemConfiguration::where('type', 'current_version')->first()->value == '3.2.0'){
                $sql_path = base_path('sqlupdates/v330.sql');
                DB::unprepared(file_get_contents($sql_path));
            }
            if(SystemConfiguration::where('type', 'current_version')->first()->value == '3.1.0'){
                $sql_path = base_path('sqlupdates/v320.sql');
                DB::unprepared(file_get_contents($sql_path));

                $sql_path = base_path('sqlupdates/v330.sql');
                DB::unprepared(file_get_contents($sql_path));
            }
            if(SystemConfiguration::where('type', 'current_version')->first()->value == '3.0.0'){
                $sql_path = base_path('sqlupdates/v310.sql');
                DB::unprepared(file_get_contents($sql_path));

                $sql_path = base_path('sqlupdates/v320.sql');
                DB::unprepared(file_get_contents($sql_path));
                
                $sql_path = base_path('sqlupdates/v330.sql');
                DB::unprepared(file_get_contents($sql_path));
            }
            if(SystemConfiguration::where('type', 'current_version')->first()->value == '2.1'){
                $sql_path = base_path('sqlupdates/v300.sql');
                DB::unprepared(file_get_contents($sql_path));

                $sql_path = base_path('sqlupdates/v310.sql');
                DB::unprepared(file_get_contents($sql_path));
                
                $sql_path = base_path('sqlupdates/v320.sql');
                DB::unprepared(file_get_contents($sql_path));
                
                $sql_path = base_path('sqlupdates/v330.sql');
                DB::unprepared(file_get_contents($sql_path));
            }
            if(SystemConfiguration::where('type', 'current_version')->first()->value == '2.0'){
                $sql_path = base_path('sqlupdates/v21.sql');
                DB::unprepared(file_get_contents($sql_path));
    
                $sql_path = base_path('sqlupdates/v300.sql');
                DB::unprepared(file_get_contents($sql_path));
                
                $sql_path = base_path('sqlupdates/v310.sql');
                DB::unprepared(file_get_contents($sql_path));
                
                $sql_path = base_path('sqlupdates/v320.sql');
                DB::unprepared(file_get_contents($sql_path));
                
                $sql_path = base_path('sqlupdates/v330.sql');
                DB::unprepared(file_get_contents($sql_path));
            } 
            if(SystemConfiguration::where('type', 'current_version')->first()->value == '1.6'){
                $sql_path = base_path('sqlupdates/v17.sql');
                DB::unprepared(file_get_contents($sql_path));
                
                $sql_path = base_path('sqlupdates/v21.sql');
                DB::unprepared(file_get_contents($sql_path));
    
                $sql_path = base_path('sqlupdates/v300.sql');
                DB::unprepared(file_get_contents($sql_path));
                
                $sql_path = base_path('sqlupdates/v310.sql');
                DB::unprepared(file_get_contents($sql_path));
                
                $sql_path = base_path('sqlupdates/v320.sql');
                DB::unprepared(file_get_contents($sql_path));
                
                $sql_path = base_path('sqlupdates/v330.sql');
                DB::unprepared(file_get_contents($sql_path));
            }
            if(SystemConfiguration::where('type', 'current_version')->first()->value == '1.5'){
                $sql_path = base_path('sqlupdates/v16.sql');
                DB::unprepared(file_get_contents($sql_path));
    
                $sql_path = base_path('sqlupdates/v17.sql');
                DB::unprepared(file_get_contents($sql_path));
    
                $sql_path = base_path('sqlupdates/v21.sql');
                DB::unprepared(file_get_contents($sql_path));
    
                $sql_path = base_path('sqlupdates/v300.sql');
                DB::unprepared(file_get_contents($sql_path));
                
                $sql_path = base_path('sqlupdates/v310.sql');
                DB::unprepared(file_get_contents($sql_path));
                
                $sql_path = base_path('sqlupdates/v320.sql');
                DB::unprepared(file_get_contents($sql_path));
                
                $sql_path = base_path('sqlupdates/v330.sql');
                DB::unprepared(file_get_contents($sql_path));
            }
            if(SystemConfiguration::where('type', 'current_version')->first()->value == '1.4'){
                $sql_path = base_path('sqlupdates/v15.sql');
                DB::unprepared(file_get_contents($sql_path));
    
                $sql_path = base_path('sqlupdates/v16.sql');
                DB::unprepared(file_get_contents($sql_path));
    
                $sql_path = base_path('sqlupdates/v17.sql');
                DB::unprepared(file_get_contents($sql_path));
                
                $sql_path = base_path('sqlupdates/v21.sql');
                DB::unprepared(file_get_contents($sql_path));
    
                $sql_path = base_path('sqlupdates/v300.sql');
                DB::unprepared(file_get_contents($sql_path));
                
                $sql_path = base_path('sqlupdates/v310.sql');
                DB::unprepared(file_get_contents($sql_path));
                
                $sql_path = base_path('sqlupdates/v320.sql');
                DB::unprepared(file_get_contents($sql_path));
                
                $sql_path = base_path('sqlupdates/v330.sql');
                DB::unprepared(file_get_contents($sql_path));
            }
            if(SystemConfiguration::where('type', 'current_version')->first()->value == '1.3'){
                $sql_path = base_path('sqlupdates/v14.sql');
                DB::unprepared(file_get_contents($sql_path));
    
                $sql_path = base_path('sqlupdates/v15.sql');
                DB::unprepared(file_get_contents($sql_path));
    
                $sql_path = base_path('sqlupdates/v16.sql');
                DB::unprepared(file_get_contents($sql_path));
    
                $sql_path = base_path('sqlupdates/v17.sql');
                DB::unprepared(file_get_contents($sql_path));
                
                $sql_path = base_path('sqlupdates/v21.sql');
                DB::unprepared(file_get_contents($sql_path));
    
                $sql_path = base_path('sqlupdates/v300.sql');
                DB::unprepared(file_get_contents($sql_path));
                
                $sql_path = base_path('sqlupdates/v310.sql');
                DB::unprepared(file_get_contents($sql_path));
                
                $sql_path = base_path('sqlupdates/v320.sql');
                DB::unprepared(file_get_contents($sql_path));
                
                $sql_path = base_path('sqlupdates/v330.sql');
                DB::unprepared(file_get_contents($sql_path));
            }
            if(SystemConfiguration::where('type', 'current_version')->first()->value == '1.2'){
                $sql_path = base_path('sqlupdates/v13.sql');
                DB::unprepared(file_get_contents($sql_path));
    
                $sql_path = base_path('sqlupdates/v14.sql');
                DB::unprepared(file_get_contents($sql_path));
    
                $sql_path = base_path('sqlupdates/v15.sql');
                DB::unprepared(file_get_contents($sql_path));
    
                $sql_path = base_path('sqlupdates/v16.sql');
                DB::unprepared(file_get_contents($sql_path));
    
                $sql_path = base_path('sqlupdates/v17.sql');
                DB::unprepared(file_get_contents($sql_path));
                
                $sql_path = base_path('sqlupdates/v21.sql');
                DB::unprepared(file_get_contents($sql_path));
    
                $sql_path = base_path('sqlupdates/v300.sql');
                DB::unprepared(file_get_contents($sql_path));
                
                $sql_path = base_path('sqlupdates/v310.sql');
                DB::unprepared(file_get_contents($sql_path));
                
                $sql_path = base_path('sqlupdates/v320.sql');
                DB::unprepared(file_get_contents($sql_path));
                
                $sql_path = base_path('sqlupdates/v330.sql');
                DB::unprepared(file_get_contents($sql_path));
            }
            if(SystemConfiguration::where('type', 'current_version')->first()->value == '1.1'){
                $sql_path = base_path('sqlupdates/v12.sql');
                DB::unprepared(file_get_contents($sql_path));
    
                $sql_path = base_path('sqlupdates/v13.sql');
                DB::unprepared(file_get_contents($sql_path));
    
                $sql_path = base_path('sqlupdates/v14.sql');
                DB::unprepared(file_get_contents($sql_path));
    
                $sql_path = base_path('sqlupdates/v15.sql');
                DB::unprepared(file_get_contents($sql_path));
    
                $sql_path = base_path('sqlupdates/v16.sql');
                DB::unprepared(file_get_contents($sql_path));
    
                $sql_path = base_path('sqlupdates/v17.sql');
                DB::unprepared(file_get_contents($sql_path));
                
                $sql_path = base_path('sqlupdates/v21.sql');
                DB::unprepared(file_get_contents($sql_path));
    
                $sql_path = base_path('sqlupdates/v300.sql');
                DB::unprepared(file_get_contents($sql_path));
                
                $sql_path = base_path('sqlupdates/v310.sql');
                DB::unprepared(file_get_contents($sql_path));
                
                $sql_path = base_path('sqlupdates/v320.sql');
                DB::unprepared(file_get_contents($sql_path));
                
                $sql_path = base_path('sqlupdates/v330.sql');
                DB::unprepared(file_get_contents($sql_path));
            }
        }
        elseif(SystemConfiguration::where('type', 'current_version')->first() == null){
            $sql_path = base_path('sqlupdates/v11.sql');
            DB::unprepared(file_get_contents($sql_path));

            $sql_path = base_path('sqlupdates/v12.sql');
            DB::unprepared(file_get_contents($sql_path));

            $sql_path = base_path('sqlupdates/v13.sql');
            DB::unprepared(file_get_contents($sql_path));

            $sql_path = base_path('sqlupdates/v14.sql');
            DB::unprepared(file_get_contents($sql_path));

            $sql_path = base_path('sqlupdates/v15.sql');
            DB::unprepared(file_get_contents($sql_path));

            $sql_path = base_path('sqlupdates/v16.sql');
            DB::unprepared(file_get_contents($sql_path));

            $sql_path = base_path('sqlupdates/v17.sql');
            DB::unprepared(file_get_contents($sql_path));
            
            $sql_path = base_path('sqlupdates/v21.sql');
            DB::unprepared(file_get_contents($sql_path));

            $sql_path = base_path('sqlupdates/v300.sql');
            DB::unprepared(file_get_contents($sql_path));
                
            $sql_path = base_path('sqlupdates/v310.sql');
            DB::unprepared(file_get_contents($sql_path));
                
            $sql_path = base_path('sqlupdates/v320.sql');
            DB::unprepared(file_get_contents($sql_path));
                
            $sql_path = base_path('sqlupdates/v330.sql');
            DB::unprepared(file_get_contents($sql_path));
        }

        return redirect()->route('update.step2');
    }

    public function step2() {
        Artisan::call('cache:clear');
        Artisan::call('view:clear');
        $previousRouteServiceProvier = base_path('app/Providers/RouteServiceProvider.php');
        $newRouteServiceProvier      = base_path('app/Providers/RouteServiceProvider.txt');
        copy($newRouteServiceProvier, $previousRouteServiceProvier);
        return view('update.done');
    }
}

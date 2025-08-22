<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Sanction;

class SanctionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        $sanctions = [
            ['student_id'=>'ALUM123456','guard_id'=>'VIG1234567','date'=>'2024-10-01','description'=>'Infraccion de normas','paid'=>0,'read'=>0,'fine_id'=>1],
            ['student_id'=>'ALUM234567','guard_id'=>'VIG2345678','date'=>'2024-10-02','description'=>'Retraso en entrega','paid'=>1,'read'=>0,'fine_id'=>2],
            ['student_id'=>'ALUM345678','guard_id'=>'VIG3456789','date'=>'2024-10-03','description'=>'Falta de asistencia','paid'=>0,'read'=>0,'fine_id'=>3],
            ['student_id'=>'ALUM456789','guard_id'=>'VIG4567890','date'=>'2024-10-04','description'=>'Mal comportamiento','paid'=>1,'read'=>0,'fine_id'=>4],
            ['student_id'=>'ALUM567890','guard_id'=>'VIG5678901','date'=>'2024-10-05','description'=>'Uso inadecuado de instalaciones','paid'=>0,'read'=>0,'fine_id'=>5],
            ['student_id'=>'ALUM678901','guard_id'=>'VIG6789012','date'=>'2024-10-06','description'=>'Desorden en clase','paid'=>0,'read'=>0,'fine_id'=>6],
            ['student_id'=>'ALUM789012','guard_id'=>'VIG7890123','date'=>'2024-10-07','description'=>'Irrespeto a autoridad','paid'=>1,'read'=>0,'fine_id'=>7],
            ['student_id'=>'ALUM890123','guard_id'=>'VIG8901234','date'=>'2024-10-08','description'=>'Falta a normas','paid'=>0,'read'=>0,'fine_id'=>8],
            ['student_id'=>'ALUM901234','guard_id'=>'VIG9012345','date'=>'2024-10-09','description'=>'No entrega de documentos','paid'=>0,'read'=>0,'fine_id'=>9],
            ['student_id'=>'ALUM012345','guard_id'=>'VIG0123456','date'=>'2024-10-10','description'=>'Comportamiento inapropiado','paid'=>1,'read'=>0,'fine_id'=>10],
            ['student_id'=>'ALUM000001','guard_id'=>'VIG1234567','date'=>'2024-01-15','description'=>'Falta a normas de conducta','paid'=>0,'read'=>0,'fine_id'=>1],
            ['student_id'=>'ALUM000002','guard_id'=>'VIG2345678','date'=>'2024-01-15','description'=>'Retraso en entrega de proyecto','paid'=>1,'read'=>0,'fine_id'=>2],
            ['student_id'=>'ALUM000003','guard_id'=>'VIG3456789','date'=>'2024-01-15','description'=>'Uso indebido de instalaciones','paid'=>0,'read'=>0,'fine_id'=>3],
            ['student_id'=>'ALUM000004','guard_id'=>'VIG4567890','date'=>'2024-01-20','description'=>'Mal comportamiento en clase','paid'=>1,'read'=>0,'fine_id'=>4],
            ['student_id'=>'ALUM000005','guard_id'=>'VIG5678901','date'=>'2024-01-20','description'=>'Falsificación de documentos','paid'=>0,'read'=>0,'fine_id'=>5],
            ['student_id'=>'ALUM000006','guard_id'=>'VIG6789012','date'=>'2024-01-25','description'=>'Consumo de sustancias prohibidas','paid'=>1,'read'=>0,'fine_id'=>6],
            ['student_id'=>'ALUM000007','guard_id'=>'VIG7890123','date'=>'2024-01-25','description'=>'Violencia en el campus','paid'=>0,'read'=>0,'fine_id'=>7],
            ['student_id'=>'ALUM000008','guard_id'=>'VIG8901234','date'=>'2024-01-25','description'=>'No entrega de documentos','paid'=>1,'read'=>0,'fine_id'=>8],
            ['student_id'=>'ALUM000009','guard_id'=>'VIG9012345','date'=>'2024-01-30','description'=>'Irrespeto a autoridad','paid'=>0,'read'=>0,'fine_id'=>9],
            ['student_id'=>'ALUM000010','guard_id'=>'VIG0123456','date'=>'2024-01-30','description'=>'Plagio en exámenes','paid'=>1,'read'=>0,'fine_id'=>10],
            ['student_id'=>'ALUM000011','guard_id'=>'VIG1122334','date'=>'2024-01-30','description'=>'Desorden en biblioteca','paid'=>0,'read'=>0,'fine_id'=>1],
            ['student_id'=>'ALUM000012','guard_id'=>'VIG2233445','date'=>'2024-02-01','description'=>'Falta de asistencia','paid'=>1,'read'=>0,'fine_id'=>2],
            ['student_id'=>'ALUM000013','guard_id'=>'VIG3344556','date'=>'2024-02-01','description'=>'Retraso en pago de cuotas','paid'=>0,'read'=>0,'fine_id'=>3],
            ['student_id'=>'ALUM000014','guard_id'=>'VIG4455667','date'=>'2024-02-05','description'=>'Uso indebido de equipo','paid'=>1,'read'=>0,'fine_id'=>4],
            ['student_id'=>'ALUM000015','guard_id'=>'VIG5566778','date'=>'2024-02-05','description'=>'Violación de normas de seguridad','paid'=>0,'read'=>0,'fine_id'=>5],
            ['student_id'=>'ALUM000016','guard_id'=>'VIG1234567','date'=>'2024-02-10','description'=>'Daño a propiedad del campus','paid'=>1,'read'=>0,'fine_id'=>6],
            ['student_id'=>'ALUM000017','guard_id'=>'VIG2345678','date'=>'2024-02-10','description'=>'Acoso escolar','paid'=>0,'read'=>0,'fine_id'=>7],
            ['student_id'=>'ALUM000018','guard_id'=>'VIG3456789','date'=>'2024-02-15','description'=>'Falta en normas de convivencia','paid'=>1,'read'=>0,'fine_id'=>8],
            ['student_id'=>'ALUM000019','guard_id'=>'VIG4567890','date'=>'2024-02-15','description'=>'Falsificación de permisos','paid'=>0,'read'=>0,'fine_id'=>9],
            ['student_id'=>'ALUM000020','guard_id'=>'VIG5678901','date'=>'2024-02-20','description'=>'Mal uso de recursos','paid'=>1,'read'=>0,'fine_id'=>10],
            ['student_id'=>'ALUM000021','guard_id'=>'VIG6789012','date'=>'2024-02-20','description'=>'Irrespeto a compañeros','paid'=>0,'read'=>0,'fine_id'=>1],
            ['student_id'=>'ALUM000022','guard_id'=>'VIG7890123','date'=>'2024-02-25','description'=>'Incumplimiento en entrega de tareas','paid'=>1,'read'=>0,'fine_id'=>2],
            ['student_id'=>'ALUM000023','guard_id'=>'VIG8901234','date'=>'2024-02-25','description'=>'Uso indebido de dispositivos electrónicos','paid'=>0,'read'=>0,'fine_id'=>3],
            ['student_id'=>'ALUM000024','guard_id'=>'VIG9012345','date'=>'2024-02-28','description'=>'Falta de respeto al profesor','paid'=>1,'read'=>0,'fine_id'=>4],
            ['student_id'=>'ALUM000025','guard_id'=>'VIG0123456','date'=>'2024-02-28','description'=>'Desobediencia en el aula','paid'=>0,'read'=>0,'fine_id'=>5],
            ['student_id'=>'ALUM000026','guard_id'=>'VIG1122334','date'=>'2024-03-01','description'=>'Irresponsabilidad en horarios','paid'=>1,'read'=>0,'fine_id'=>6],
            ['student_id'=>'ALUM000027','guard_id'=>'VIG2233445','date'=>'2024-03-01','description'=>'Uso indebido de las instalaciones deportivas','paid'=>0,'read'=>0,'fine_id'=>7],
            ['student_id'=>'ALUM000028','guard_id'=>'VIG3344556','date'=>'2024-03-05','description'=>'Violación de reglamento interno','paid'=>1,'read'=>0,'fine_id'=>8],
            ['student_id'=>'ALUM000029','guard_id'=>'VIG4455667','date'=>'2024-03-05','description'=>'Plagio de trabajos académicos','paid'=>0,'read'=>0,'fine_id'=>9],
            ['student_id'=>'ALUM000030','guard_id'=>'VIG5566778','date'=>'2024-03-10','description'=>'Uso inadecuado de uniformes','paid'=>1,'read'=>0,'fine_id'=>10],
            ['student_id'=>'ALUM000031','guard_id'=>'VIG1234567','date'=>'2024-03-10','description'=>'Retraso constante','paid'=>0,'read'=>0,'fine_id'=>1],
            ['student_id'=>'ALUM000032','guard_id'=>'VIG2345678','date'=>'2024-03-15','description'=>'Uso de lenguaje ofensivo','paid'=>1,'read'=>0,'fine_id'=>2],
            ['student_id'=>'ALUM000033','guard_id'=>'VIG3456789','date'=>'2024-03-15','description'=>'Incumplimiento en proyectos','paid'=>0,'read'=>0,'fine_id'=>3],
            ['student_id'=>'ALUM000034','guard_id'=>'VIG4567890','date'=>'2024-03-20','description'=>'Falta en prácticas académicas','paid'=>1,'read'=>0,'fine_id'=>4],
            ['student_id'=>'ALUM000035','guard_id'=>'VIG5678901','date'=>'2024-03-20','description'=>'Uso indebido de laboratorios','paid'=>0,'read'=>0,'fine_id'=>5],
            ['student_id'=>'ALUM000036','guard_id'=>'VIG6789012','date'=>'2024-03-25','description'=>'Incumplimiento en normas de puntualidad','paid'=>1,'read'=>0,'fine_id'=>6],
            ['student_id'=>'ALUM000037','guard_id'=>'VIG7890123','date'=>'2024-03-25','description'=>'Desobediencia durante simulacros','paid'=>0,'read'=>0,'fine_id'=>7],
            ['student_id'=>'ALUM000038','guard_id'=>'VIG8901234','date'=>'2024-03-30','description'=>'Falta de respeto al personal administrativo','paid'=>1,'read'=>0,'fine_id'=>8],
            ['student_id'=>'ALUM000039','guard_id'=>'VIG9012345','date'=>'2024-03-30','description'=>'Incumplimiento en actividades extracurriculares','paid'=>0,'read'=>0,'fine_id'=>9],
            ['student_id'=>'ALUM000040','guard_id'=>'VIG0123456','date'=>'2024-04-01','description'=>'Descuido en materiales asignados','paid'=>1,'read'=>0,'fine_id'=>10],
            ['student_id'=>'ALUM000041','guard_id'=>'VIG1122334','date'=>'2024-04-01','description'=>'Inadecuado uso de tecnologías','paid'=>0,'read'=>0,'fine_id'=>1],
            ['student_id'=>'ALUM000042','guard_id'=>'VIG2233445','date'=>'2024-04-05','description'=>'Consumo de sustancias durante actividades','paid'=>1,'read'=>0,'fine_id'=>2],
            ['student_id'=>'ALUM000043','guard_id'=>'VIG3344556','date'=>'2024-04-05','description'=>'Negligencia en actividades grupales','paid'=>0,'read'=>0,'fine_id'=>3],
            ['student_id'=>'ALUM000044','guard_id'=>'VIG4455667','date'=>'2024-04-10','description'=>'Violación en reglamento de biblioteca','paid'=>1,'read'=>0,'fine_id'=>4],
            ['student_id'=>'ALUM000045','guard_id'=>'VIG5566778','date'=>'2024-04-10','description'=>'Falta a la asistencia obligatoria','paid'=>0,'read'=>0,'fine_id'=>5],
            ['student_id'=>'ALUM000046','guard_id'=>'VIG1234567','date'=>'2024-04-15','description'=>'Desobediencia durante clases virtuales','paid'=>1,'read'=>0,'fine_id'=>6],
            ['student_id'=>'ALUM000047','guard_id'=>'VIG2345678','date'=>'2024-04-15','description'=>'Mal uso de becas escolares','paid'=>0,'read'=>0,'fine_id'=>7],
            ['student_id'=>'ALUM000048','guard_id'=>'VIG3456789','date'=>'2024-04-20','description'=>'Desobediencia a supervisores','paid'=>1,'read'=>0,'fine_id'=>8],
            ['student_id'=>'ALUM000049','guard_id'=>'VIG4567890','date'=>'2024-04-20','description'=>'Acoso hacia compañeros','paid'=>0,'read'=>0,'fine_id'=>9],
            ['student_id'=>'ALUM000050','guard_id'=>'VIG5678901','date'=>'2024-04-25','description'=>'Irrespeto hacia normas éticas','paid'=>1,'read'=>0,'fine_id'=>10],
            ['student_id'=>'ALUM000051','guard_id'=>'VIG6789012','date'=>'2024-05-01','description'=>'Desobediencia durante actividades académicas','paid'=>0,'read'=>0,'fine_id'=>1],
            ['student_id'=>'ALUM000052','guard_id'=>'VIG7890123','date'=>'2024-05-01','description'=>'Negligencia en cuidado de recursos','paid'=>1,'read'=>0,'fine_id'=>2],
            ['student_id'=>'ALUM000053','guard_id'=>'VIG8901234','date'=>'2024-05-05','description'=>'Participación en actividades sin autorización','paid'=>0,'read'=>0,'fine_id'=>3],
            ['student_id'=>'ALUM000054','guard_id'=>'VIG9012345','date'=>'2024-05-05','description'=>'Falsificación de reportes académicos','paid'=>1,'read'=>0,'fine_id'=>4],
            ['student_id'=>'ALUM000055','guard_id'=>'VIG0123456','date'=>'2024-05-10','description'=>'Irresponsabilidad en compromisos','paid'=>0,'read'=>0,'fine_id'=>5],
            ['student_id'=>'ALUM000056','guard_id'=>'VIG1122334','date'=>'2024-05-10','description'=>'Uso inadecuado de recursos escolares','paid'=>1,'read'=>0,'fine_id'=>6],
            ['student_id'=>'ALUM000057','guard_id'=>'VIG2233445','date'=>'2024-05-15','description'=>'Desobediencia en actividades de grupo','paid'=>0,'read'=>0,'fine_id'=>7],
            ['student_id'=>'ALUM000058','guard_id'=>'VIG3344556','date'=>'2024-05-15','description'=>'Acoso verbal a compañeros','paid'=>1,'read'=>0,'fine_id'=>8],
            ['student_id'=>'ALUM000059','guard_id'=>'VIG4455667','date'=>'2024-05-20','description'=>'Violación en reglamento ético','paid'=>0,'read'=>0,'fine_id'=>9],
            ['student_id'=>'ALUM000060','guard_id'=>'VIG5566778','date'=>'2024-05-20','description'=>'Retraso en cumplimiento de actividades','paid'=>1,'read'=>0,'fine_id'=>10],
            ['student_id'=>'ALUM000061','guard_id'=>'VIG1234567','date'=>'2024-05-25','description'=>'Uso indebido de equipo escolar','paid'=>0,'read'=>0,'fine_id'=>1],
            ['student_id'=>'ALUM000062','guard_id'=>'VIG2345678','date'=>'2024-05-25','description'=>'Retraso en pagos','paid'=>1,'read'=>0,'fine_id'=>2],
            ['student_id'=>'ALUM000063','guard_id'=>'VIG3456789','date'=>'2024-05-30','description'=>'Plagio en proyectos','paid'=>0,'read'=>0,'fine_id'=>3],
            ['student_id'=>'ALUM000064','guard_id'=>'VIG4567890','date'=>'2024-05-30','description'=>'Irrespeto hacia autoridades','paid'=>1,'read'=>0,'fine_id'=>4],
            ['student_id'=>'ALUM000065','guard_id'=>'VIG5678901','date'=>'2024-06-01','description'=>'Comportamiento inadecuado en actos escolares','paid'=>0,'read'=>0,'fine_id'=>5],
            ['student_id'=>'ALUM000066','guard_id'=>'VIG6789012','date'=>'2024-06-01','description'=>'Negligencia en actividades deportivas','paid'=>1,'read'=>0,'fine_id'=>6],
            ['student_id'=>'ALUM000067','guard_id'=>'VIG7890123','date'=>'2024-06-05','description'=>'Uso indebido de redes institucionales','paid'=>0,'read'=>0,'fine_id'=>7],
            ['student_id'=>'ALUM000068','guard_id'=>'VIG8901234','date'=>'2024-06-05','description'=>'Incumplimiento en normas de conducta','paid'=>1,'read'=>0,'fine_id'=>8],
            ['student_id'=>'ALUM000069','guard_id'=>'VIG9012345','date'=>'2024-06-10','description'=>'Falta a asistencia obligatoria','paid'=>0,'read'=>0,'fine_id'=>9],
            ['student_id'=>'ALUM000070','guard_id'=>'VIG0123456','date'=>'2024-06-10','description'=>'Desobediencia en reglas académicas','paid'=>1,'read'=>0,'fine_id'=>10],
        ];

        foreach($sanctions as $sanction){
            Sanction::create($sanction);
        }
    }
}

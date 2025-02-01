<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Kategori;
use App\Models\ChildKategori;
use Illuminate\Support\Facades\Storage;
use App\Models\SubchildKategori;

class KategoriSeeder extends Seeder
{
    public function run(): void
    {
        // Kategori 1
        $imagePath1 = public_path('images/asma.png');
        if (file_exists($imagePath1)) {
            $imageContents1 = file_get_contents($imagePath1);
            Storage::disk('public')->put('images/asma.png', $imageContents1);
        }

        // Kategori 2
        $imagePath2 = public_path('images/diabetes.png');
        if (file_exists($imagePath2)) {
            $imageContents2 = file_get_contents($imagePath2);
            Storage::disk('public')->put('images/diabetes.png', $imageContents2);
        }
        // Kategori 3
        $imagePath3 = public_path('images/ia.png');
        if (file_exists($imagePath3)) {
            $imageContents3 = file_get_contents($imagePath3);
            Storage::disk('public')->put('images/ia.png', $imageContents3);
        }
        // Kategori 4
        $imagePath4 = public_path('images/kpd.png');
        if (file_exists($imagePath4)) {
            $imageContents4 = file_get_contents($imagePath4);
            Storage::disk('public')->put('images/kpd.png', $imageContents4);
        }
        // Kategori 5
        $imagePath5 = public_path('images/kj.png');
        if (file_exists($imagePath5)) {
            $imageContents5 = file_get_contents($imagePath5);
            Storage::disk('public')->put('images/kj.png', $imageContents5);
        }
        // Kategori 6
        $imagePath6 = public_path('images/ks.png');
        if (file_exists($imagePath6)) {
            $imageContents6 = file_get_contents($imagePath6);
            Storage::disk('public')->put('images/ks.png', $imageContents6);
        }
        // Kategori 7
        $imagePath7 = public_path('images/lk.png');
        if (file_exists($imagePath7)) {
            $imageContents7 = file_get_contents($imagePath7);
            Storage::disk('public')->put('images/lk.png', $imageContents7);
        }
        // Kategori 8
        $imagePath8 = public_path('images/ns.png');
        if (file_exists($imagePath8)) {
            $imageContents8 = file_get_contents($imagePath8);
            Storage::disk('public')->put('images/ns.png', $imageContents8);
        }
        // Kategori 9
        $imagePath9 = public_path('images/oi.png');
        if (file_exists($imagePath9)) {
            $imageContents9 = file_get_contents($imagePath9);
            Storage::disk('public')->put('images/oi.png', $imageContents9);
        }
        // Kategori 10
        $imagePath10 = public_path('images/op.png');
        if (file_exists($imagePath10)) {
            $imageContents10 = file_get_contents($imagePath10);
            Storage::disk('public')->put('images/op.png', $imageContents10);
        }
        // Kategori 11
        $imagePath11 = public_path('images/or.jpeg');
        if (file_exists($imagePath11)) {
            $imageContents11 = file_get_contents($imagePath11);
            Storage::disk('public')->put('images/or.jpeg', $imageContents11);
        }
        // Kategori 12
        $imagePath12 = public_path('images/pp.png');
        if (file_exists($imagePath12)) {
            $imageContents12 = file_get_contents($imagePath12);
            Storage::disk('public')->put('images/pp.png', $imageContents12);
        }
        // Kategori 13
        $imagePath13 = public_path('images/sp.png');
        if (file_exists($imagePath13)) {
            $imageContents13 = file_get_contents($imagePath13);
            Storage::disk('public')->put('images/sp.png', $imageContents13);
        }
        // Kategori 14
        $imagePath14 = public_path('images/susu.png');
        if (file_exists($imagePath14)) {
            $imageContents14 = file_get_contents($imagePath14);
            Storage::disk('public')->put('images/susu.png', $imageContents14);
        }
        // Kategori 15
        $imagePath15 = public_path('images/vs.png');
        if (file_exists($imagePath15)) {
            $imageContents15 = file_get_contents($imagePath15);
            Storage::disk('public')->put('images/vs.png', $imageContents15);
        }
        // Kategori 16
        $imagePath16 = public_path('images/bb.png');
        if (file_exists($imagePath16)) {
            $imageContents16 = file_get_contents($imagePath16);
            Storage::disk('public')->put('images/bb.png', $imageContents16);
        }

        
        $kategori1 = Kategori::create(['image' => 'storage/images/asma.png', 'nama' => 'Asma']);
        $kategori2 = Kategori::create(['image' => 'storage/images/diabetes.png', 'nama' => 'Diabetes']);
        $kategori3 = Kategori::create(['image' => 'storage/images/ia.png', 'nama' => 'Ibu & Anak']);
        $kategori4 = Kategori::create(['image' => 'storage/images/kpd.png', 'nama' => 'Kecantikan & Perawatan Diri']);
        $kategori5 = Kategori::create(['image' => 'storage/images/kj.png', 'nama' => 'Kesehatan Jantung']);
        $kategori6 = Kategori::create(['image' => 'storage/images/ks.png', 'nama' => 'Kesehatan Seksual']);
        $kategori7 = Kategori::create(['image' => 'storage/images/lk.png', 'nama' => 'Lensa Kontak']);
        $kategori8 = Kategori::create(['image' => 'storage/images/ns.png', 'nama' => 'Nasal Care']);
        $kategori9 = Kategori::create(['image' => 'storage/images/oi.png', 'nama' => 'Obat Onkologi & Imunosupresan']);
        $kategori10 = Kategori::create(['image' => 'storage/images/or.jpeg', 'nama' => 'Obat Rutin']);
        $kategori11 = Kategori::create(['image' => 'storage/images/op.png', 'nama' => 'Obat & Perawatan']);
        $kategori12 = Kategori::create(['image' => 'storage/images/pp.png', 'nama' => 'Perangkat & Peralatan']);
        $kategori13 = Kategori::create(['image' => 'storage/images/sp.png', 'nama' => 'Saluran Pencernaan']);
        $kategori14 = Kategori::create(['image' => 'storage/images/susu.png', 'nama' => 'Susu']);
        $kategori15 = Kategori::create(['image' => 'storage/images/vs.png', 'nama' => 'Vitamin & Suplemen']);
        $kategori16 = Kategori::create(['image' => 'storage/images/bb.png', 'nama' => 'Weight management']);

        $child1 = ChildKategori::create(['nama' => 'Obat', 'parent_kategori_id' => $kategori1->id]);
        $child2 = ChildKategori::create(['nama' => 'Inhaler', 'parent_kategori_id' => $kategori1->id]);
        $child3 = ChildKategori::create(['nama' => 'Perawatan Asma', 'parent_kategori_id' => $kategori1->id]);

        $child4 = ChildKategori::create(['nama' => 'Obat', 'parent_kategori_id' => $kategori2->id]);
        $child5 = ChildKategori::create(['nama' => 'Insulin', 'parent_kategori_id' => $kategori2->id]);
        $child6 = ChildKategori::create(['nama' => 'Suplemen', 'parent_kategori_id' => $kategori2->id]);
        $child7 = ChildKategori::create(['nama' => 'Monitoring & Pengelolaan', 'parent_kategori_id' => $kategori2->id]);

        $child8 = ChildKategori::create(['nama' => 'Bayi & Anak', 'parent_kategori_id' => $kategori3->id]);
        $child9 = ChildKategori::create(['nama' => 'Popok & Tisu Basah', 'parent_kategori_id' => $kategori3->id]);
        $child10 = ChildKategori::create(['nama' => 'Nutrisi', 'parent_kategori_id' => $kategori3->id]);
        $child11 = ChildKategori::create(['nama' => 'Kesehatan Bayi & Anak', 'parent_kategori_id' => $kategori3->id]);
        $child12 = ChildKategori::create(['nama' => 'Kehamilan & Menyusui', 'parent_kategori_id' => $kategori3->id]);
        $child13 = ChildKategori::create(['nama' => 'Lainnya', 'parent_kategori_id' => $kategori3->id]);

        $child14 = ChildKategori::create(['nama' => 'Eksim', 'parent_kategori_id' => $kategori4->id]);
        $child15 = ChildKategori::create(['nama' => 'Perawatan Jerawatan', 'parent_kategori_id' => $kategori4->id]);
        $child16 = ChildKategori::create(['nama' => 'Perawatan Diri', 'parent_kategori_id' => $kategori4->id]);
        $child17 = ChildKategori::create(['nama' => 'Perawatan Kulit', 'parent_kategori_id' => $kategori4->id]);
        $child18 = ChildKategori::create(['nama' => 'Sun Care', 'parent_kategori_id' => $kategori4->id]);
        $child19 = ChildKategori::create(['nama' => 'Kosmetik & Kecantikan', 'parent_kategori_id' => $kategori4->id]);
        $child20 = ChildKategori::create(['nama' => 'Perawatan Pria', 'parent_kategori_id' => $kategori4->id]);

        $child21 = ChildKategori::create(['nama' => 'Obat', 'parent_kategori_id' => $kategori5->id]);
        $child22 = ChildKategori::create(['nama' => 'Vitamin & Suplemen', 'parent_kategori_id' => $kategori5->id]);
        $child23 = ChildKategori::create(['nama' => 'Monitoring & Pengelolaan', 'parent_kategori_id' => $kategori5->id]);

        $child24 = ChildKategori::create(['nama' => 'Hormon Wanita', 'parent_kategori_id' => $kategori6->id]);
        $child25 = ChildKategori::create(['nama' => 'Disfungsi Ereksi', 'parent_kategori_id' => $kategori6->id]);
        $child26 = ChildKategori::create(['nama' => 'Perawatan Kehamilan', 'parent_kategori_id' => $kategori6->id]);
        $child27 = ChildKategori::create(['nama' => 'Test Pack', 'parent_kategori_id' => $kategori6->id]);
        $child28 = ChildKategori::create(['nama' => 'Kontrasepsi Oral', 'parent_kategori_id' => $kategori6->id]);
        $child29 = ChildKategori::create(['nama' => 'Kondom & Pelumas', 'parent_kategori_id' => $kategori6->id]);
        $child30 = ChildKategori::create(['nama' => 'Suplemen Pria', 'parent_kategori_id' => $kategori6->id]);
        
        $child31 = ChildKategori::create(['nama' => 'Lensa', 'parent_kategori_id' => $kategori7->id]);
        $child32 = ChildKategori::create(['nama' => 'Aksesoris', 'parent_kategori_id' => $kategori7->id]);
        $child33 = ChildKategori::create(['nama' => 'Cairan Lensa Kontak', 'parent_kategori_id' => $kategori7->id]);
        
        $child34 = ChildKategori::create(['nama' => 'Dewasa', 'parent_kategori_id' => $kategori8->id]);
        $child35 = ChildKategori::create(['nama' => 'Anak', 'parent_kategori_id' => $kategori8->id]);
        
        $child36 = ChildKategori::create(['nama' => 'Obat Kanker', 'parent_kategori_id' => $kategori9->id]);
        $child37 = ChildKategori::create(['nama' => 'Obat Imunosupresan', 'parent_kategori_id' => $kategori9->id]);
        
        $child38 = ChildKategori::create(['nama' => 'Asma', 'parent_kategori_id' => $kategori10->id]);
        $child39 = ChildKategori::create(['nama' => 'Penyakit Jantung', 'parent_kategori_id' => $kategori10->id]);
        $child40 = ChildKategori::create(['nama' => 'Diabetes', 'parent_kategori_id' => $kategori10->id]);
        
        $child41 = ChildKategori::create(['nama' => 'Batuk, Pilek & Flu', 'parent_kategori_id' => $kategori11->id]);
        $child42 = ChildKategori::create(['nama' => 'Masalah Pencernaan', 'parent_kategori_id' => $kategori11->id]);
        $child43 = ChildKategori::create(['nama' => 'Masalah THT', 'parent_kategori_id' => $kategori11->id]);
        $child44 = ChildKategori::create(['nama' => 'Kondisi Kulit', 'parent_kategori_id' => $kategori11->id]);
        $child45 = ChildKategori::create(['nama' => 'Tulang & Sendi Sakit', 'parent_kategori_id' => $kategori11->id]);
        $child46 = ChildKategori::create(['nama' => 'Demam & Nyeri', 'parent_kategori_id' => $kategori11->id]);
        $child47 = ChildKategori::create(['nama' => 'Obat Lainnya', 'parent_kategori_id' => $kategori11->id]);
        $child48 = ChildKategori::create(['nama' => 'Alergi', 'parent_kategori_id' => $kategori11->id]);
        $child49 = ChildKategori::create(['nama' => 'Masalah Mata', 'parent_kategori_id' => $kategori11->id]);
        $child50 = ChildKategori::create(['nama' => 'Infeksi', 'parent_kategori_id' => $kategori11->id]);
        $child51 = ChildKategori::create(['nama' => 'Kesuburan & Lainnya', 'parent_kategori_id' => $kategori11->id]);
        
        $child52 = ChildKategori::create(['nama' => 'Untuk Sehari-hari', 'parent_kategori_id' => $kategori12->id]);
        $child53 = ChildKategori::create(['nama' => 'Alat Monitoring', 'parent_kategori_id' => $kategori12->id]);
        $child54 = ChildKategori::create(['nama' => 'P3K', 'parent_kategori_id' => $kategori12->id]);
        $child55 = ChildKategori::create(['nama' => 'Alat Bantu Dengar', 'parent_kategori_id' => $kategori12->id]);
        $child56 = ChildKategori::create(['nama' => 'Alat Tes Mandiri', 'parent_kategori_id' => $kategori12->id]);
        $child57 = ChildKategori::create(['nama' => 'Tisu Alkohol & Jarum', 'parent_kategori_id' => $kategori12->id]);
        $child58 = ChildKategori::create(['nama' => 'Penopang Tubuh', 'parent_kategori_id' => $kategori12->id]);
        $child59 = ChildKategori::create(['nama' => 'Lainnya', 'parent_kategori_id' => $kategori12->id]);
        
        $child60 = ChildKategori::create(['nama' => 'Susu Dewasa', 'parent_kategori_id' => $kategori14->id]);
        $child61 = ChildKategori::create(['nama' => 'Bayi & Anak', 'parent_kategori_id' => $kategori14->id]);
        $child62 = ChildKategori::create(['nama' => 'Susu Medis Khusus', 'parent_kategori_id' => $kategori14->id]);
        $child63 = ChildKategori::create(['nama' => 'Lainnya', 'parent_kategori_id' => $kategori14->id]);

        $child64 = ChildKategori::create(['nama' => 'Kesehatan & Imun', 'parent_kategori_id' => $kategori15->id]);
        $child65 = ChildKategori::create(['nama' => 'Bayi & Anak', 'parent_kategori_id' => $kategori15->id]);
        $child66 = ChildKategori::create(['nama' => 'Pria', 'parent_kategori_id' => $kategori15->id]);
        $child67 = ChildKategori::create(['nama' => 'Tulang Sendi', 'parent_kategori_id' => $kategori15->id]);
        $child68 = ChildKategori::create(['nama' => 'Suplemen Khusus', 'parent_kategori_id' => $kategori15->id]);
        $child69 = ChildKategori::create(['nama' => 'Wanita', 'parent_kategori_id' => $kategori15->id]);
        $child70 = ChildKategori::create(['nama' => 'Kecantikan', 'parent_kategori_id' => $kategori15->id]);
        $child71 = ChildKategori::create(['nama' => 'Kesehatan Pencernaan', 'parent_kategori_id' => $kategori15->id]);
        $child72 = ChildKategori::create(['nama' => 'Diet, Sehat & Bugar', 'parent_kategori_id' => $kategori15->id]);
        $child73 = ChildKategori::create(['nama' => 'Produk Alami', 'parent_kategori_id' => $kategori15->id]);

        $child74 = ChildKategori::create(['nama' => 'Obat', 'parent_kategori_id' => $kategori16->id]);
        $child75 = ChildKategori::create(['nama' => 'Alat Penunjang', 'parent_kategori_id' => $kategori16->id]);
        $child76 = ChildKategori::create(['nama' => 'Nutrisi & Suplemen', 'parent_kategori_id' => $kategori16->id]);

        SubchildKategori::create(['nama' => 'Perangkat & Aksesoris', 'parent_child_kategori_id' => $child3->id]);
        SubchildKategori::create(['nama' => 'Kaleng Oksigen', 'parent_child_kategori_id' => $child3->id]);
        
        SubchildKategori::create(['nama' => 'Vitamin & Herbal', 'parent_child_kategori_id' => $child6->id]);
        SubchildKategori::create(['nama' => 'Nutrisi Diabetes', 'parent_child_kategori_id' => $child6->id]);
        SubchildKategori::create(['nama' => 'Gula Diabetes', 'parent_child_kategori_id' => $child6->id]);  

        SubchildKategori::create(['nama' => 'Alat Monitoring', 'parent_child_kategori_id' => $child7->id]);
        SubchildKategori::create(['nama' => 'Lanset, Jarum & Swab', 'parent_child_kategori_id' => $child7->id]);
        SubchildKategori::create(['nama' => 'Lainnya', 'parent_child_kategori_id' => $child7->id]);


        SubchildKategori::create(['nama' => 'Perlengkapan Mandi', 'parent_child_kategori_id' => $child8->id]);
        SubchildKategori::create(['nama' => 'Krim Ruam', 'parent_child_kategori_id' => $child8->id]);
        SubchildKategori::create(['nama' => 'Telon & Kayu Putih', 'parent_child_kategori_id' => $child8->id]);
        SubchildKategori::create(['nama' => 'Perawatan Kulit', 'parent_child_kategori_id' => $child8->id]);
        SubchildKategori::create(['nama' => 'Lainnya', 'parent_child_kategori_id' => $child8->id]);

        SubchildKategori::create(['nama' => 'Makanan & Snack', 'parent_child_kategori_id' => $child10->id]);
        SubchildKategori::create(['nama' => 'Susu', 'parent_child_kategori_id' => $child10->id]);
        SubchildKategori::create(['nama' => 'Peralatan Makan', 'parent_child_kategori_id' => $child10->id]);
        SubchildKategori::create(['nama' => 'Susu Khusus', 'parent_child_kategori_id' => $child10->id]);

        SubchildKategori::create(['nama' => 'Perawatan Ibu', 'parent_child_kategori_id' => $child12->id]);
        SubchildKategori::create(['nama' => 'Perlengakapan Menyusui', 'parent_child_kategori_id' => $child12->id]);
        SubchildKategori::create(['nama' => 'Nutrisi Bersalin', 'parent_child_kategori_id' => $child12->id]);

        SubchildKategori::create(['nama' => 'Popok', 'parent_child_kategori_id' => $child9->id]);
        SubchildKategori::create(['nama' => 'Tisu Basah', 'parent_child_kategori_id' => $child9->id]);

        SubchildKategori::create(['nama' => 'Plester Penurunan Panas', 'parent_child_kategori_id' => $child11->id]);
        SubchildKategori::create(['nama' => 'Hidung Tersumbat', 'parent_child_kategori_id' => $child11->id]);
        SubchildKategori::create(['nama' => 'Dekongestan & Minyak', 'parent_child_kategori_id' => $child11->id]);

        SubchildKategori::create(['nama' => 'Perlengkapan Pembersih', 'parent_child_kategori_id' => $child13->id]);
        SubchildKategori::create(['nama' => 'Sanitizer Anti Septik', 'parent_child_kategori_id' => $child13->id]);
        SubchildKategori::create(['nama' => 'Lainnya', 'parent_child_kategori_id' => $child13->id]);


        SubchildKategori::create(['nama' => 'Perawatan', 'parent_child_kategori_id' => $child15->id]);
        SubchildKategori::create(['nama' => 'Acne Patch & Gel', 'parent_child_kategori_id' => $child15->id]);

        SubchildKategori::create(['nama' => 'Badan, Gigi, Rambut', 'parent_child_kategori_id' => $child16->id]);
        SubchildKategori::create(['nama' => 'Deodoran & Pewangi', 'parent_child_kategori_id' => $child16->id]);
        SubchildKategori::create(['nama' => 'Perawatan Tangan', 'parent_child_kategori_id' => $child16->id]);
        SubchildKategori::create(['nama' => 'Perawatan Kewanitaan', 'parent_child_kategori_id' => $child16->id]);
        SubchildKategori::create(['nama' => 'Produk Sekali Pakai', 'parent_child_kategori_id' => $child16->id]);
        SubchildKategori::create(['nama' => 'Lainnya', 'parent_child_kategori_id' => $child16->id]);
        
        SubchildKategori::create(['nama' => 'Perawatan Wajah', 'parent_child_kategori_id' => $child17->id]);
        SubchildKategori::create(['nama' => 'Perawatan Rambut', 'parent_child_kategori_id' => $child17->id]);
        SubchildKategori::create(['nama' => 'Pisau Cukur', 'parent_child_kategori_id' => $child17->id]);
        SubchildKategori::create(['nama' => 'Perawatan Tubuh', 'parent_child_kategori_id' => $child17->id]);
        SubchildKategori::create(['nama' => 'Deodoran & Pewangi', 'parent_child_kategori_id' => $child17->id]);
        SubchildKategori::create(['nama' => 'Lainnya', 'parent_child_kategori_id' => $child17->id]);

        SubchildKategori::create(['nama' => 'Perawatan Wajah', 'parent_child_kategori_id' => $child18->id]);
        SubchildKategori::create(['nama' => 'Perawatan Kulit Berjerawat', 'parent_child_kategori_id' => $child18->id]);
        SubchildKategori::create(['nama' => 'Perawatan Tubuh', 'parent_child_kategori_id' => $child18->id]);

        SubchildKategori::create(['nama' => 'Wajah', 'parent_child_kategori_id' => $child20->id]);
        SubchildKategori::create(['nama' => 'Kuku', 'parent_child_kategori_id' => $child20->id]);
        SubchildKategori::create(['nama' => 'Mata & Bibir', 'parent_child_kategori_id' => $child20->id]);
        SubchildKategori::create(['nama' => 'Aksesoris', 'parent_child_kategori_id' => $child20->id]);


        SubchildKategori::create(['nama' => 'Hipertensi', 'parent_child_kategori_id' => $child21->id]);
        SubchildKategori::create(['nama' => 'Penyakit Jantung', 'parent_child_kategori_id' => $child21->id]);
        SubchildKategori::create(['nama' => 'Kolesterol', 'parent_child_kategori_id' => $child21->id]);
        SubchildKategori::create(['nama' => 'Alat Monitoring', 'parent_child_kategori_id' => $child22->id]);
        SubchildKategori::create(['nama' => 'Lanset, Jarum & Swab', 'parent_child_kategori_id' => $child22->id]);
        SubchildKategori::create(['nama' => 'Vitamin & Herbal', 'parent_child_kategori_id' => $child23->id]);
        SubchildKategori::create(['nama' => 'Makanan & Nutrisi', 'parent_child_kategori_id' => $child23->id]);


        SubchildKategori::create(['nama' => 'Lensa Kontak Minus', 'parent_child_kategori_id' => $child31->id]);
        SubchildKategori::create(['nama' => 'Lensa Kontak Plano', 'parent_child_kategori_id' => $child31->id]);


        SubchildKategori::create(['nama' => 'Batuk, Pilek & Flu', 'parent_child_kategori_id' => $child41->id]);
        SubchildKategori::create(['nama' => 'Balsem & Minyak Esensial', 'parent_child_kategori_id' => $child41->id]);
        SubchildKategori::create(['nama' => 'Perawatan Herbal', 'parent_child_kategori_id' => $child41->id]);
        SubchildKategori::create(['nama' => 'Nasal Spray & Dekongestan', 'parent_child_kategori_id' => $child41->id]);
        SubchildKategori::create(['nama' => 'Untuk Bayi & Anak', 'parent_child_kategori_id' => $child41->id]);
        SubchildKategori::create(['nama' => 'Asam Lambung & GERD', 'parent_child_kategori_id' => $child42->id]);
        SubchildKategori::create(['nama' => 'Diare', 'parent_child_kategori_id' => $child42->id]);
        SubchildKategori::create(['nama' => 'Sembelit & Wasir', 'parent_child_kategori_id' => $child42->id]);
        SubchildKategori::create(['nama' => 'Mual & Muntah', 'parent_child_kategori_id' => $child42->id]);
        SubchildKategori::create(['nama' => 'Infeksi Cacing', 'parent_child_kategori_id' => $child42->id]);
        SubchildKategori::create(['nama' => 'Sariawan & Herpes Mulut', 'parent_child_kategori_id' => $child43->id]);
        SubchildKategori::create(['nama' => 'Obat Kumur Antiseptik', 'parent_child_kategori_id' => $child43->id]);
        SubchildKategori::create(['nama' => 'Pelega Tenggorokan', 'parent_child_kategori_id' => $child43->id]);
        SubchildKategori::create(['nama' => 'Obat Tetes Telinga', 'parent_child_kategori_id' => $child43->id]);
        SubchildKategori::create(['nama' => 'Kebersihan Hidung', 'parent_child_kategori_id' => $child43->id]);
        SubchildKategori::create(['nama' => 'Jerawat', 'parent_child_kategori_id' => $child44->id]);
        SubchildKategori::create(['nama' => 'Infeksi Kulit', 'parent_child_kategori_id' => $child44->id]);
        SubchildKategori::create(['nama' => 'Dermatitis & Eksim', 'parent_child_kategori_id' => $child44->id]);
        SubchildKategori::create(['nama' => 'Lainnya', 'parent_child_kategori_id' => $child44->id]);
        SubchildKategori::create(['nama' => 'Tulang & Osteoporosis', 'parent_child_kategori_id' => $child45->id]);
        SubchildKategori::create(['nama' => 'Relaksan Otot', 'parent_child_kategori_id' => $child45->id]);
        SubchildKategori::create(['nama' => 'Asam Urat & Radang Sendi', 'parent_child_kategori_id' => $child45->id]);
        SubchildKategori::create(['nama' => 'Balsem & Minyak', 'parent_child_kategori_id' => $child45->id]);
        SubchildKategori::create(['nama' => 'Anti Infalamasi', 'parent_child_kategori_id' => $child46->id]);
        SubchildKategori::create(['nama' => 'Gangguan Tidur', 'parent_child_kategori_id' => $child46->id]);
        SubchildKategori::create(['nama' => 'Kelainan Darah', 'parent_child_kategori_id' => $child46->id]);
        SubchildKategori::create(['nama' => 'Otak & Saraf', 'parent_child_kategori_id' => $child46->id]);
        SubchildKategori::create(['nama' => 'Kesehatan Mental', 'parent_child_kategori_id' => $child46->id]);
        SubchildKategori::create(['nama' => 'Lainnya', 'parent_child_kategori_id' => $child46->id]);
        SubchildKategori::create(['nama' => 'Pereda Demam & Nyeri', 'parent_child_kategori_id' => $child47->id]);
        SubchildKategori::create(['nama' => 'Terapi Panas & Dingin', 'parent_child_kategori_id' => $child47->id]);
        SubchildKategori::create(['nama' => 'Untuk Bayi & Anak', 'parent_child_kategori_id' => $child47->id]);
        SubchildKategori::create(['nama' => 'Perawatan Herbal', 'parent_child_kategori_id' => $child47->id]);
        SubchildKategori::create(['nama' => 'Obat Alergi', 'parent_child_kategori_id' => $child48->id]);
        SubchildKategori::create(['nama' => 'Pereda Gatal', 'parent_child_kategori_id' => $child48->id]);
        SubchildKategori::create(['nama' => 'Gatal, Kering & Merah', 'parent_child_kategori_id' => $child49->id]);
        SubchildKategori::create(['nama' => 'Lainnya', 'parent_child_kategori_id' => $child49->id]);
        SubchildKategori::create(['nama' => 'Antibiotik', 'parent_child_kategori_id' => $child50->id]);
        SubchildKategori::create(['nama' => 'Antivirus', 'parent_child_kategori_id' => $child50->id]);
        SubchildKategori::create(['nama' => 'Antijamur', 'parent_child_kategori_id' => $child50->id]);
        SubchildKategori::create(['nama' => 'Kandung Kemih & Ginjal', 'parent_child_kategori_id' => $child51->id]);
        SubchildKategori::create(['nama' => 'Wanita', 'parent_child_kategori_id' => $child51->id]);
        SubchildKategori::create(['nama' => 'Pria', 'parent_child_kategori_id' => $child51->id]);
        SubchildKategori::create(['nama' => 'Pil Kontrasepsi', 'parent_child_kategori_id' => $child51->id]);
        SubchildKategori::create(['nama' => 'Lainnya', 'parent_child_kategori_id' => $child51->id]);
        
        SubchildKategori::create(['nama' => 'Pelindung', 'parent_child_kategori_id' => $child52->id]);
        SubchildKategori::create(['nama' => 'Antiseptik & Disinfektan', 'parent_child_kategori_id' => $child52->id]);
        SubchildKategori::create(['nama' => 'Termometer', 'parent_child_kategori_id' => $child53->id]);
        SubchildKategori::create(['nama' => 'Pengukur Tekanan Darah', 'parent_child_kategori_id' => $child53->id]);
        SubchildKategori::create(['nama' => 'Timbangan', 'parent_child_kategori_id' => $child53->id]);
        SubchildKategori::create(['nama' => 'Oksimeter', 'parent_child_kategori_id' => $child53->id]);
        SubchildKategori::create(['nama' => 'Tes Gula Darah', 'parent_child_kategori_id' => $child53->id]);
        SubchildKategori::create(['nama' => 'Lainnya', 'parent_child_kategori_id' => $child53->id]);
        SubchildKategori::create(['nama' => 'Antiseptik', 'parent_child_kategori_id' => $child54->id]);
        SubchildKategori::create(['nama' => 'Perawatan Luka', 'parent_child_kategori_id' => $child54->id]);
        SubchildKategori::create(['nama' => 'Perban', 'parent_child_kategori_id' => $child54->id]);
        SubchildKategori::create(['nama' => 'Alat Bantu Dengar', 'parent_child_kategori_id' => $child55->id]);
        SubchildKategori::create(['nama' => 'Aksesoris', 'parent_child_kategori_id' => $child55->id]);
        SubchildKategori::create(['nama' => 'Kesuburan & Kehamilan', 'parent_child_kategori_id' => $child56->id]);
        SubchildKategori::create(['nama' => 'Lainnya', 'parent_child_kategori_id' => $child56->id]);
        SubchildKategori::create(['nama' => 'Jarum Tes', 'parent_child_kategori_id' => $child57->id]);
        SubchildKategori::create(['nama' => 'Jarum Insulin', 'parent_child_kategori_id' => $child57->id]);
        SubchildKategori::create(['nama' => 'Swab Alkohol', 'parent_child_kategori_id' => $child57->id]);
        SubchildKategori::create(['nama' => 'Pelindung Lutut', 'parent_child_kategori_id' => $child58->id]);
        SubchildKategori::create(['nama' => 'Penyangga Tangan', 'parent_child_kategori_id' => $child58->id]);
        SubchildKategori::create(['nama' => 'Stoking Kompresi', 'parent_child_kategori_id' => $child58->id]);
        SubchildKategori::create(['nama' => 'Urinal', 'parent_child_kategori_id' => $child59->id]);
        SubchildKategori::create(['nama' => 'Perlak & Popok Dewasa', 'parent_child_kategori_id' => $child59->id]);
        SubchildKategori::create(['nama' => 'Celana Sunat', 'parent_child_kategori_id' => $child59->id]);
        SubchildKategori::create(['nama' => 'Alat Bantu Mobilitas', 'parent_child_kategori_id' => $child59->id]);
        SubchildKategori::create(['nama' => 'Lainnya', 'parent_child_kategori_id' => $child59->id]);
        
        SubchildKategori::create(['nama' => 'Orang Dewasa', 'parent_child_kategori_id' => $child60->id]);
        SubchildKategori::create(['nama' => 'Susu Khusus', 'parent_child_kategori_id' => $child60->id]);
        SubchildKategori::create(['nama' => 'Lansia', 'parent_child_kategori_id' => $child60->id]);
        SubchildKategori::create(['nama' => 'Susu Formula Bayi', 'parent_child_kategori_id' => $child61->id]);
        SubchildKategori::create(['nama' => 'Susu Formula Anak', 'parent_child_kategori_id' => $child61->id]);
        
        SubchildKategori::create(['nama' => 'Vitamin A, B & E', 'parent_child_kategori_id' => $child64->id]);
        SubchildKategori::create(['nama' => 'Vitamin D', 'parent_child_kategori_id' => $child64->id]);
        SubchildKategori::create(['nama' => 'Mineral', 'parent_child_kategori_id' => $child64->id]);
        SubchildKategori::create(['nama' => 'Vitamin C', 'parent_child_kategori_id' => $child64->id]);
        SubchildKategori::create(['nama' => 'Multivitamin', 'parent_child_kategori_id' => $child64->id]);
        SubchildKategori::create(['nama' => 'Imunitas & Antioksidan', 'parent_child_kategori_id' => $child64->id]);
        SubchildKategori::create(['nama' => 'Multivitamin', 'parent_child_kategori_id' => $child65->id]);
        SubchildKategori::create(['nama' => 'Anemia', 'parent_child_kategori_id' => $child65->id]);
        SubchildKategori::create(['nama' => 'Imun Booster', 'parent_child_kategori_id' => $child65->id]);
        SubchildKategori::create(['nama' => 'Penambah Nafsu Makan', 'parent_child_kategori_id' => $child65->id]);
        SubchildKategori::create(['nama' => 'Kesehatan Prostat', 'parent_child_kategori_id' => $child66->id]);
        SubchildKategori::create(['nama' => 'Vitalis & Stamina', 'parent_child_kategori_id' => $child66->id]);
        SubchildKategori::create(['nama' => 'Tulang & Gigi', 'parent_child_kategori_id' => $child67->id]);
        SubchildKategori::create(['nama' => 'Persendian', 'parent_child_kategori_id' => $child67->id]);
        SubchildKategori::create(['nama' => 'Minyak Ikan', 'parent_child_kategori_id' => $child68->id]);
        SubchildKategori::create(['nama' => 'Jantung & Hati', 'parent_child_kategori_id' => $child68->id]);
        SubchildKategori::create(['nama' => 'Otak', 'parent_child_kategori_id' => $child68->id]);
        SubchildKategori::create(['nama' => 'Mata', 'parent_child_kategori_id' => $child68->id]);
        SubchildKategori::create(['nama' => 'Ginjal & Kandung Kemih', 'parent_child_kategori_id' => $child68->id]);
        SubchildKategori::create(['nama' => 'Kehamilan & Menyusui', 'parent_child_kategori_id' => $child69->id]);
        SubchildKategori::create(['nama' => 'Menopause', 'parent_child_kategori_id' => $child69->id]);
        SubchildKategori::create(['nama' => 'Anemia', 'parent_child_kategori_id' => $child69->id]);
        SubchildKategori::create(['nama' => 'Rambut, Kulit & Kuku', 'parent_child_kategori_id' => $child70->id]);
        SubchildKategori::create(['nama' => 'Antioksidan', 'parent_child_kategori_id' => $child70->id]);
        SubchildKategori::create(['nama' => 'Vitamin E', 'parent_child_kategori_id' => $child70->id]);
        SubchildKategori::create(['nama' => 'Probiotik', 'parent_child_kategori_id' => $child71->id]);
        SubchildKategori::create(['nama' => 'Serat', 'parent_child_kategori_id' => $child71->id]);
        SubchildKategori::create(['nama' => 'Enzim Pencernaan', 'parent_child_kategori_id' => $child71->id]);
        SubchildKategori::create(['nama' => 'Penurunan Berat Badan', 'parent_child_kategori_id' => $child72->id]);
        SubchildKategori::create(['nama' => 'Nutrisi Lainnya', 'parent_child_kategori_id' => $child72->id]);
        SubchildKategori::create(['nama' => 'Produk Minuman', 'parent_child_kategori_id' => $child72->id]);
        SubchildKategori::create(['nama' => 'Penambah Berat & Otot', 'parent_child_kategori_id' => $child72->id]);
        SubchildKategori::create(['nama' => 'Snack Sehat', 'parent_child_kategori_id' => $child72->id]);
        SubchildKategori::create(['nama' => 'Obat Herbal', 'parent_child_kategori_id' => $child73->id]);
        SubchildKategori::create(['nama' => 'Madu & Kurma', 'parent_child_kategori_id' => $child73->id]);
        SubchildKategori::create(['nama' => 'Habbatussauda & Zaitun', 'parent_child_kategori_id' => $child73->id]);
        SubchildKategori::create(['nama' => 'Lainnya', 'parent_child_kategori_id' => $child73->id]);
        
        SubchildKategori::create(['nama' => 'Suplemen', 'parent_child_kategori_id' => $child76->id]);
        SubchildKategori::create(['nama' => 'Nutrisi & Detoks', 'parent_child_kategori_id' => $child76->id]);

        
    }
}

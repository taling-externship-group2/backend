<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ContentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

    public function definition()
    {
        $category = collect(['인기수업', '뷰티/헬스', '액티비티', '라이프', '취미/공예', '머니', '커리어', '디자인/영상', '외국어'])->random();
        $class_type = collect(['오리지널 VOD', '온라인 LIVE', 'VOD,녹화영상', '오프라인', '전자책'])->random();
        switch ($category) {
            case '인기수업':
                $cateMain = 1;
                break;
            case '뷰티/헬스':
                $cateMain = 2;
                break;
            case '액티비티':
                $cateMain = 3;
                break;
            case '라이프':
                $cateMain = 4;
                break;
            case '취미/공예':
                $cateMain = 5;
                break;
            case '머니':
                $cateMain = 6;
                break;
            case '커리어':
                $cateMain = 7;
                break;
            case '디자인/영상':
                $cateMain = 8;
                break;
            case '외국어':
                $cateMain = 9;
                break;
        }
        // switch ($class) {
        //     case '오리지널 VOD':
        //         $class_type = 1;
        //         break;
        //     case '온라인 LIVE':
        //         $class_type = 2;
        //         break;
        //     case 'VOD,녹화영상':
        //         $class_type = 3;
        //         break;
        //     case '오프라인':
        //         $class_type = 4;
        //         break;
        //     case '전자책':
        //         $class_type = 5;
        //         break;
        // }
        return [
            'image' => 'https://front-img.taling.me/Content/app3/img/logo/app-logo@2x.png',
            'user_id' => collect()->range(1, 20)->random(),
            'title' => '이 강의는 ' . $category . '의 수업입니다.',
            'price' => collect()->range(10000, 100000)->random(),
            'discount' => '9000',
            'cateSub' => '컴퓨터공학',
            'duration' => collect()->range(1, 40)->random(),
            'contents_sum' => '멋쟁이사자처럼에서 교육을 받은 개발자 분들과 2주간 탈잉에서 제시하는 미션을 수행하며 실무 역량을 키우는 프로그램입니다.',
            'target' => '멋쟁이사자처럼 교육을 이수하신 분들 대상의 프로그램입니다. PHP/Laravel, TypeScript/Vue.js 개발자를 대상으로 합니다.',
            'contents_detail' =>
            '# 목표
            - 실제 서비스하고 있는 프러덕트의 구조 분석
            - 분석한 내용을 바탕으로한 개발 범위와 일정 산정
            - 분석한 내용을 바탕으로한 데이터, API 및 UI 컴포넌트 설계
            - 백엔드와 프론트엔드간의 원활한 협업 (업무 분장 및 코드 리뷰 등)',
            'crclm' =>
            '1회차 커리큘럼
            2주간 진행할 미션에 대한 설명 및 팀 빌딩을 진행합니다.      
            
            각 팀당 30분씩 진행합니다. 진행은 별개 세션으로 진행합니다.',
            'cateMain' => $cateMain,
            'category' => $category,
            'class_type' => $class_type,
            'onedayclass' => collect([true, false])->random(),
            'love_num' => collect()->range(10, 1000)->random(),
            'rate' => collect()->range(0, 5)->random(),
            'review_num' => collect()->range(10, 1000)->random(),

        ];
    }
}

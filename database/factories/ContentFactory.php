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
        static $no = 1;
        $title = 'This class_Id is ' . $no++;
        return [
            'user_id' => '1',
            'title' => $title,
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

            'cate_main' => '커리어',
            'cate_sub' => '컴퓨터공학'
        ];
    }
}

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>G.B.D Anuradha - CV</title>
    <style>
        body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; margin: 0; padding: 20px; }
        .header { text-align: center; border-bottom: 3px solid #2563eb; padding-bottom: 20px; margin-bottom: 30px; }
        .name { font-size: 28px; font-weight: bold; color: #2563eb; margin-bottom: 10px; }
        .title { font-size: 18px; color: #666; margin-bottom: 15px; }
        .contact-info { font-size: 14px; color: #555; }
        .section { margin-bottom: 25px; }
        .section-title { font-size: 20px; font-weight: bold; color: #2563eb; border-bottom: 2px solid #e5e7eb; padding-bottom: 5px; margin-bottom: 15px; }
        .item { margin-bottom: 15px; }
        .item-title { font-weight: bold; font-size: 16px; color: #374151; }
        .item-subtitle { font-weight: bold; color: #6b7280; font-size: 14px; }
        .item-date { color: #9ca3af; font-size: 12px; }
        .item-description { margin-top: 5px; font-size: 14px; }
        .skills-grid { display: flex; flex-wrap: wrap; gap: 10px; }
        .skill-item { background: #f3f4f6; padding: 5px 10px; border-radius: 15px; font-size: 12px; color: #374151; }
        .project-item { border-left: 3px solid #2563eb; padding-left: 15px; margin-bottom: 15px; }
        .certification-item { margin-bottom: 10px; }
        .page-break { page-break-before: always; }
    </style>
</head>
<body>
    <div class="header">
        <div class="name">{{ $personalInfo->name ?? 'G.B.D Anuradha' }}</div>
        <div class="title">{{ $personalInfo->title ?? 'Software Engineer' }}</div>
        <div class="contact-info">
            {{ $personalInfo->email ?? 'anuradha@example.com' }} | 
            {{ $personalInfo->phone ?? '+94 71 234 5678' }} | 
            {{ $personalInfo->location ?? 'Colombo, Sri Lanka' }}
        </div>
    </div>

    @if($personalInfo && $personalInfo->summary)
    <div class="section">
        <div class="section-title">Professional Summary</div>
        <div class="item-description">{{ $personalInfo->summary }}</div>
    </div>
    @endif

    @if($experience->count() > 0)
    <div class="section">
        <div class="section-title">Professional Experience</div>
        @foreach($experience as $exp)
        <div class="item">
            <div class="item-title">{{ $exp->position }}</div>
            <div class="item-subtitle">{{ $exp->company }}</div>
            <div class="item-date">{{ \Carbon\Carbon::parse($exp->start_date)->format('M Y') }} - 
                @if($exp->end_date)
                    {{ \Carbon\Carbon::parse($exp->end_date)->format('M Y') }}
                @else
                    Present
                @endif
            </div>
            @if($exp->description)
            <div class="item-description">{{ $exp->description }}</div>
            @endif
        </div>
        @endforeach
    </div>
    @endif

    @if($education->count() > 0)
    <div class="section">
        <div class="section-title">Education</div>
        @foreach($education as $edu)
        <div class="item">
            <div class="item-title">{{ $edu->degree }}</div>
            <div class="item-subtitle">{{ $edu->institution }}</div>
            <div class="item-date">{{ \Carbon\Carbon::parse($edu->start_date)->format('Y') }} - 
                @if($edu->end_date)
                    {{ \Carbon\Carbon::parse($edu->end_date)->format('Y') }}
                @else
                    Present
                @endif
            </div>
            @if($edu->description)
            <div class="item-description">{{ $edu->description }}</div>
            @endif
        </div>
        @endforeach
    </div>
    @endif

    @if($skills->count() > 0)
    <div class="section">
        <div class="section-title">Technical Skills</div>
        @php
            $skillsByCategory = $skills->groupBy('category');
        @endphp
        @foreach($skillsByCategory as $category => $categorySkills)
        <div class="item">
            <div class="item-subtitle">{{ $category }}</div>
            <div class="skills-grid">
                @foreach($categorySkills as $skill)
                <span class="skill-item">{{ $skill->name }}</span>
                @endforeach
            </div>
        </div>
        @endforeach
    </div>
    @endif

    @if($projects->count() > 0)
    <div class="section">
        <div class="section-title">Projects</div>
        @foreach($projects as $project)
        <div class="project-item">
            <div class="item-title">{{ $project->title }}</div>
            @if($project->technologies)
            <div class="item-subtitle">Technologies: {{ $project->technologies }}</div>
            @endif
            @if($project->description)
            <div class="item-description">{{ $project->description }}</div>
            @endif
            @if($project->url)
            <div class="item-description">URL: {{ $project->url }}</div>
            @endif
        </div>
        @endforeach
    </div>
    @endif

    @if($certifications->count() > 0)
    <div class="section">
        <div class="section-title">Certifications</div>
        @foreach($certifications as $cert)
        <div class="certification-item">
            <div class="item-title">{{ $cert->name }}</div>
            <div class="item-subtitle">{{ $cert->issuing_organization }}</div>
            <div class="item-date">Issued: {{ \Carbon\Carbon::parse($cert->issue_date)->format('M Y') }}</div>
            @if($cert->description)
            <div class="item-description">{{ $cert->description }}</div>
            @endif
        </div>
        @endforeach
    </div>
    @endif
</body>
</html> 
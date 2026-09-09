<style>
    h3 {
        text-align: center;
        margin-top: 15px;
    }
    hr {
        margin-top: 20px;
        margin-bottom: 20px;
        border: 0;
        border-top: 1px solid #eee;
    }

</style>
<div style="margin: auto; max-width: 600px; border: 1px solid #e3e3e3; background-color: #f5f5f5;">
    <div style="text-align: center; margin-top: 20px;">
        <img src="{{asset('/images/25_04/logo.png')}}" alt="Logo" style="margin: auto">
    </div>
    <h3 style="text-align: center">{{isset($data['subject']) ? $data['subject'] : 'Kontaktný formulár'}}</h3>
    <hr>
    <div style="padding: 20px 30px;">
        <div>
            <p style="text-align: center;">
                <strong>Meno: </strong><br>
                {{ $data['name'] }}
            </p>
            <p style="text-align: center;">
                <strong>E-Mail: </strong><br>
                {{ $data['email'] }}
            </p>
            <p style="text-align: center;">
                <strong>Správa: </strong><br>
                {{ $data['message'] }}
            </p>
        </div>
    </div>
</div>
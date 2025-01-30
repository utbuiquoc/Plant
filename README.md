# HỆ THỐNG CHẨN ĐOÁN VÀ GIÁM SÁT CHẤT LƯỢNG ĐẤT TRỒNG RỪNG
<p float="left">
    <image src="https://img.shields.io/badge/Laravel-FF2D20?style=for-the-badge&logo=laravel&logoColor=white" />
    <image src="https://img.shields.io/badge/livewire-4e56a6?style=for-the-badge&logo=livewire&logoColor=white" />
    <image src="https://img.shields.io/badge/Tailwind_CSS-38B2AC?style=for-the-badge&logo=tailwind-css&logoColor=white" />
    <image src="https://img.shields.io/badge/-HuggingFace-FDEE21?style=for-the-badge&logo=HuggingFace&logoColor=black" />
    <image src="https://img.shields.io/badge/fastapi-109989?style=for-the-badge&logo=FASTAPI&logoColor=white" />
    <image src="https://img.shields.io/badge/pypi-3775A9?style=for-the-badge&logo=pypi&logoColor=white" />
    <image src="https://img.shields.io/badge/Chart%20js-FF6384?style=for-the-badge&logo=chartdotjs&logoColor=white" />
</p>

![image](https://raw.githubusercontent.com/utbuiquoc/Plant/refs/heads/main/resources/img/dashboard.png)
![image](https://raw.githubusercontent.com/utbuiquoc/Plant/refs/heads/main/resources/img/analysis.png)
## Tổng quan dự án
Đề án nghiên cứu **Hệ thống chẩn đoán và giám sát chất lượng đất trồng rừng** được phát triển nhằm tham gia cuộc thi Khoa học Kỹ thuật. Dự án tập trung vào việc xây dựng một hệ thống thông minh giúp đánh giá, theo dõi và quản lý chất lượng đất trồng rừng một cách chính xác và hiệu quả. Hệ thống này không chỉ hỗ trợ các nhà nghiên cứu và quản lý rừng trong việc đưa ra quyết định kịp thời mà còn góp phần phục hồi và bảo vệ tài nguyên đất, nâng cao hiệu suất trồng rừng và thúc đẩy phát triển bền vững.

## Mục đích nghiên cứu
- Quan trắc hiện trạng, một số yếu tố về chất lượng đất.
- Phân tích dữ liệu chất lượng đất nhằm phát hiện các yếu tố ngăn chặn sự phát triển của cây, đặc biệt trong những giai đoạn đầu của phát triển.
- Đảm bảo chất lượng đất trồng rừng được giám sát và duy trì ổn định, ngăn chặn sự ô nhiễm và suy giảm môi trường thiên nhiên quý báu này.
- Dự báo trước những rủi ro trong tương lai và đưa ra cảnh báo.
- Xây dựng hệ thống giám chất lượng đất sử dụng các cảm biến và truyền tải hệ thống dữ liệu đã ghi nhận được sử dụng nền tảng IoT.


## Tổng quan đề tài nghiên cứu
Nhóm tác giả đã tiến hành nghiên cứu yếu tố tác động đến khả năng sống sót của cây trồng, trong đó, các yếu tố môi trường đóng vai trò quan trọng và có ảnh hưởng lớn. Các thông số của đất và môi trường ảnh hưởng đến cây trồng bao gồm: 
- **EC (us/cm)**: Tổng nồng độ ion hòa tan trong dung dịch có trong đất, chỉ số quan trọng ảnh hưởng đến sự trao đổi của đất.
- **Độ pH của đất**: Có ảnh hưởng đến khả năng hấp thụ chất dinh dưỡng. 
- **Chất lượng không khí (ppm)**: Phản ánh quá trình trao đổi khí.
- **Nhiệt độ đất (°C)**: Ảnh hưởng đến quá trình sinh trưởng của cây trồng và hoạt động của vi sinh vật trong đất.
- **Độ ẩm đất (%)**: Ảnh hưởng đến khả năng hấp thụ nước và chất dinh dưỡng của cây trồng.
- **Nhiệt độ không khí (°C)**: Ảnh hưởng đến sự phát triển của cây trồng.
- **Độ ẩm không khí (%)**: Ảnh hưởng đến khả năng sinh trưởng của cây.
- **Chất lượng không khí (ppm)**: Phản ánh quá trình trao đổi khí. 

## Thiết bị sử dụng
- DHT11 (Mạch cảm biến nhiệt độ, độ ẩm không khí):
    - Được hiệu chuẩn với công nghệ cảm biến điện trở kết hợp với điện trở NTC để đọc chính xác nhiệt độ và độ ẩm xung quanh.
    - Đầu ra của DHT11 ở dạng tín hiệu kỹ thuật số trên một chân dữ liệu duy nhất, tần số cập nhật cảm biến sẽ được đo ở mỗi 2 giây (0,5Hz).
    - Chức năng cảm biến:
        - Thang độ ẩm: 20% → 95%, sai số: ±5%.
        - Thang nhiệt độ: 0 → +50°C, sai số: ±2°C.
        - Đầu ra tín hiệu: Digital.
    - Soil Moisture Sensor (Cảm biến độ ẩm đất):
        - Thông số kỹ thuật:
            - Điện áp hoạt động: 3.3 ~ 5 VDC.
    - Tín hiệu đầu ra:
        - Analog: theo điện áp cấp nguồn tương ứng.
        - Digital: High hoặc Low, có thể điều chỉnh độ ẩm mong muốn bằng biến trở.
- EC PH NPK 7 RS485:
    - EC PH NPK 7 là dòng cảm biến độ ẩm đất, nhiệt độ đất, độ dẫn điện, PH, NPK, Soil Moisture Sensor cho ra kết quả đo chính xác, ổn định & tin cậy. Ngõ ra RS485 Modbus RTU chuẩn công nghiệp giúp dễ dàng kết nối đến các hệ thống điều khiển và giám sát độ ẩm đất, nhiệt độ đất mong muốn (MCU, PLC, PC, ...).
    - Thông số kỹ thuật:
        - Nguồn cấp: 12 - 24 VDC.
        - Thời gian đáp ứng: < 1s.
        - Phạm vi đo độ ẩm đất: 0 - 100%.
        - Độ chính xác của độ ẩm: ±3% (trong khoảng 0 – 53%), ±5% (trong khoảng 53 - 100%).
        - Phạm vi đo nhiệt độ đất: -40℃ ~ 80℃.
        - Độ chính xác của nhiệt độ: ±0,5℃.
- Cảm biến chất lượng không khí MQ135:
    - Cảm biến chất lượng không khí MQ135 là cảm biến khí có độ nhạy cao. dễ dàng phát hiện khí độc, chất lượng không khí kém có chứa các thành phần độc hại như: SnO2, ammonia, sulfide, hơi benzen, khói, khí độc, ... Với độ chính xác cao và tuổi thọ làm việc lớn. 
    - Thông số kỹ thuật:
        - Điện áp làm việc: 5V (AC - DC).
        - Thời gian làm việc trung bình: 5 năm.
        - Nhiệt độ làm việc: -10 ~ 50℃.
        - Thời gian đáp ứng: ≤ 30s.
        - Thời gian phản ứng: ≤ 1s.
        - Độ nhạy: ≥ 3.
        - Phạm vi phát hiện: 100 - 20000 ppm.
- Cảm biến mưa:
    - Mạch cảm biến mưa gồm 2 bộ phận: Bộ phận cảm biến mưa được gắn ngoài trời và bộ phận điều chỉnh độ nhạy cần được che chắn.
    - Thông số kỹ thuật:
        - Điện áp: 5V.
        - Led báo nguồn (Màu xanh).
        - Led cảnh báo mưa (Màu đỏ).
        - Hoạt động dựa trên nguyên lý: Nước rơi vào board sẽ tạo ra môi trường dẫn điện.
- Mạch Mtiny ESP32 WROOM-32E: 
    - Thông số kỹ thuật:
        - CPU và Bộ nhớ On-Chip: Vi xử lý ESP32-D0WD-V3, vi xử lý 32-bit LX6 dual-core, lên tới 240 MHz; 448 KB ROM; 520 KB SRAM; 16 KB SRAM trong RTC.
        - Cung cấp năng lượng: Pin 3V3: 3.0 ~ 3.6 VDC, thông thường 3.3 VDC, dòng >500 mA.


## Mô hình AI
### Llama 3.2
- Dùng cho các tác vụ yêu cầu suy luận, phân tích dữ liệu phức tạp (ví dụ:
đánh giá dữ liệu đất và tối ưu hóa cây trồng).
- Phân tích xu hướng phát triển của cây trồng.
### Qwen 2.5
- Hỗ trợ người dùng bằng tiếng Việt: Trả lời câu hỏi, cung cấp thông tin ngữ cảnh địa phương thông qua hệ thống AI hỗ trợ.
- Phân tích văn bản tiếng Việt để hiểu rõ các tài liệu, báo cáo, và các nội dung liên quan đến ngữ cảnh Việt Nam.
### Kết hợp Llama 3.2 và Qwen 2.5
Nhóm nghiên cứu đã đưa ra quyết định sử dụng cả hai mô hình:
- Llama 3.2: Đảm nhiệm các tác vụ suy luận, phân tích dữ liệu lớn, và các bài toán yêu cầu xử lý thông tin đa ngôn ngữ hoặc đa chiều.
- Qwen 2.5: Tập trung vào các tác vụ liên quan đến tiếng Việt và ngữ cảnh địa phương, tối ưu hóa trải nghiệm người dùng và độ chính xác trong các hệ thống hỗ trợ thông tin.
### Hệ thống RAG
- Sử dụng embedding model **nomic-embed-text** kết hợp với Qwen 2.5 trên hệ thống LightRAG.

## Huấn luyện AI
Để hỗ trợ đánh giá dữ liệu đất và tối ưu hóa việc sử dụng đất trong canh tác nông nghiệp, nhóm sử dụng phương pháp Fine-tune kết hợp với LoRA (Low-Rank Adaptation) Adapters.
- Quy trình thực hiện:
    - Thu thập và xử lý dữ liệu đất từ nhiều nguồn khác nhau.
    - Áp dụng Fine-tune với LoRA adapters trên mô hình học sâu (ví dụ: Transformer hoặc các mô hình tương tự).
    - Kiểm tra và đánh giá hiệu suất của mô hình trên các tập dữ liệu kiểm định.


## Dự báo thời tiết
Nhằm dự báo thời tiết chính xác và hỗ trợ phân tích các hiện tượng thiên tai, nhóm sử dụng Gemini API.
#### Thực hiện:
- Kết nối với Gemini API và cung cấp dữ liệu thời tiết từ Open Meteo API.
- Sử dụng các mô hình học sâu để phân tích dữ liệu và nhận diện các nguy cơ thiên tai.
- Xây dựng giao diện hiển thị thông tin thời tiết và cảnh báo sớm, tích hợp các thông tin hữu ích cho người dùng.


## Hướng phát triển
- Mở rộng mạng lưới và nâng cao hiệu suất cảm biến để đảm bảo chất lượng và độ chính xác của dữ liệu thu thập. Sử dụng các cảm biến tiên tiến và phương pháp hiệu quả để cải thiện khả năng giám sát.
- Tiếp tục thu thập thêm bộ dữ liệu để đưa ra những chẩn đoán chính xác hơn.
- Phát triển ứng dụng di động để dễ dàng sử dụng trên điện thoại.
- Kết hợp drone để có thể đánh giá độ bao phủ rừng.


## Kết luận
Sau quá trình nghiên cứu và thử nghiệm, đề tài đã bước đầu xây dựng được một hệ thống giám sát chất lượng đất với các thông số cơ bản và tạo giao diện website với quy mô nhỏ. Tuy nhiên vì kiến thức còn hạn chế nên trong phạm vi này vẫn còn nhiều vấn đề cần nghiên cứu và phát triển thêm.

Sau khi hoàn thiện sản phẩm, nhóm tác giả hy vọng đề tài này sẽ cung cấp một công cụ mạnh mẽ cho việc giám sát và quản lý chất lượng đất, giúp bảo vệ và phục hồi rừng cũng như sức khỏe con người và xa hơn là phát triển kinh tế xanh bền vững. Dự kiến kết quả của dự án sẽ thể hiện thông qua việc tăng diện tích phủ rừng, tăng cường nhận thức về môi trường, và sự tham gia tích cực của cộng đồng trong việc bảo vệ rừng của chúng ta.

## Nhóm tác giả
- Bùi Cường Quốc, học sinh lớp 12 chuyên Tin, trường THPT chuyên Võ Nguyên Giáp.
- Nguyễn Quỳnh Mai, học sinh lớp 12 chuyên Tin, trường THPT chuyên Võ Nguyên Giáp.

## Cảm ơn sự hỗ trợ
- Cô Hoàng Thị Minh Huyền, giáo viên chủ nhiệm lớp 12 Tin niên khóa 2022-2025, trường THPT chuyên Võ Nguyên Giáp
- Nguyễn Khắc Trung, học sinh lớp 12 chuyên Tin, trường THPT chuyên Võ Nguyên Giáp.
- Trần Huy Hoàng, học sinh lớp 12 chuyên Tin, trường THPT chuyên Võ Nguyên Giáp.
- Võ Ngọc Sinh, học sinh lớp 12 chuyên Tin, trường THPT chuyên Võ Nguyên Giáp.

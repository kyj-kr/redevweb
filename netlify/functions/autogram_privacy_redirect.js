exports.handler = async (event, context) => {
  const acceptLanguage = event.headers['accept-language'] || '';
  
  // 단순 언어 체크 (ko 포함 여부)
  if (acceptLanguage.toLowerCase().includes('ko')) {
    return {
      statusCode: 302,
      headers: {
        Location: '/autogram_privacy_ko.html'
      }
    };
  }
  else if (acceptLanguage.toLowerCase().includes('ja')) {
    return {
      statusCode: 302,
      headers: {
        Location: '/autogram_privacy_ja.html'
      }
    };
  }
  else {
    return {
      statusCode: 302,
      headers: {
        Location: '/autogram_privacy.html'
      }
    };
  }
};

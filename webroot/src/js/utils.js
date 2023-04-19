export const setMobileTable = (selector) => {
  let tableEls;
  if ((tableEls = document.querySelectorAll(selector))) {
    tableEls.forEach((table) => {
      let thEls = table.querySelectorAll("thead th");
      let tdLabels = Array.from(thEls).map((el) => el.innerText);
      table.querySelectorAll("tbody tr").forEach((tr) => {
        Array.from(tr.children).forEach(
          (td, ndx) => tdLabels[ndx] && td.setAttribute("label", tdLabels[ndx])
        );
      });
    });
  }
};

export const breakString = (str, limit) => {
  let brokenString = "";
  for (let i = 0, count = 0; i < str.length; i++) {
    if (count >= limit && str[i] === " ") {
      count = 0;
      brokenString += "<br>";
    } else {
      count++;
      brokenString += str[i];
    }
  }
  return brokenString;
};

export const humanFileSize = (bytes, si) => {
  var thresh = si ? 1000 : 1024;
  if (bytes < thresh) return bytes + " B";
  var units = si
    ? ["kB", "MB", "GB", "TB", "PB", "EB", "ZB", "YB"]
    : ["KiB", "MiB", "GiB", "TiB", "PiB", "EiB", "ZiB", "YiB"];
  var u = -1;
  do {
    bytes /= thresh;
    ++u;
  } while (bytes >= thresh);
  return bytes.toFixed(1) + " " + units[u];
};

export const serializeForm = (form) => {
  var obj = {};
  var formData = new FormData(form);
  for (var key of formData.keys()) {
    obj[key] = formData.get(key);
  }
  return obj;
};

export const baseName = (str) => {
  let base = new String(str).substring(str.lastIndexOf("/") + 1);
  if (base.lastIndexOf(".") != -1)
    base = base.substring(0, base.lastIndexOf("."));
  return base;
};
